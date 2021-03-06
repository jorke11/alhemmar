function Orders() {
    var table, product = 0, cont = 0;
    this.init = function () {
        $("#btnNew").click(this.new);
        $("#btnSave").click(this.save);
        $("#btnAssociate").click(this.associateUser);
        $("#tabManagement").click(function () {
            $(".input-orders").cleanFields({disabled: true});
            $("#btnSave").attr("disabled", true);
        })

        table = obj.table();
        var progress = 0;
        $(".input-orders").blur(function () {
            cont = 0;
            $(".input-orders").each(function () {
                var elem = $(this);

                if (elem.attr('type') == 'text' && elem.val() != '') {
                    cont++;
                } else if (elem.get(0).tagName == 'SELECT' && elem.val() != 0) {
                    cont++;
                }
            });

            console.log("product: " + product);
            console.log("cont: " + cont);

            cont += product;
            progress = cont * 8.3;
            $("#bar-progress").css("width", progress + "%").html(progress + "% Completado");

            if (cont == 12) {
                $("#bar-progress").css("width", "100%").html("100% Completado").removeClass("progress-bar-info").addClass("progress-bar-success");
            }

//            $("#bar-progress").html(progress + "%");
        })

        $("#department_id").change(function () {
            var elem = $(this);
            var token = $("input[name=_token]").val();

            $.ajax({
                url: 'orders/getCities/' + elem.val(),
                method: 'GET',
                headers: {'X-CSRF-TOKEN': token},
                dataType: 'JSON',
                success: function (data) {
                    var html = '';
                    $.each(data, function (i, val) {
                        html += '<option value="' + val.id + '">' + val.description + "</option>";
                    })
                    $("#city_id").html(html);

                }
            })
        })



    }

    this.new = function () {
        $(".input-orders").cleanFields();
        $("#btnSave").attr("disabled", false);
        $("#bar-progress").css("width", "0%").html("0% Complete");
        product = 0;
    }

    this.associateUser = function () {
        $("#btnAssociate").attr("disabled", true);
        var param = {};
        param.user_id = $("#frmAssociate #user_id").val();
        var token = $("input[name=_token]").val();
        $.ajax({
            url: 'orders/associate/' + $("#frmAssociate #order_id").val(),
            method: 'put',
            data: param,
            headers: {'X-CSRF-TOKEN': token},
            dataType: 'JSON',
            success: function (data) {
                if (data.success == true) {
                    $("#btnAssociate").attr("disabled", false);
                    $("#modalAssociate").modal("hide");
                    table.ajax.reload();
                    toastr.success("Usuario asignado");
                }
            }
        })
    }

    this.associate = function (id) {
        $("#modalAssociate").modal("show");
        $("#frmAssociate #order_id").val(id);
    }

    this.save = function () {
        toastr.remove();
        $("#btnSave").attr("disabled", true);
        var frm = $("#frm"), schem = 0;
        var data = frm.serialize();
        var url = "", method = "";
        var id = $("#frm #id").val();
        var msg = '';

        var validate = $(".input-orders").validate();

        if ($("#frm #schema_id").val() != "0") {
            if (validate.length == 0) {
                if (id == '') {
                    method = 'POST';
                    url = "orders";
                    msg = "Created Record";
                } else {
                    method = 'PUT';
                    url = "orders/" + id;
                    msg = "Edited Record";
                }

                $.ajax({
                    url: url,
                    method: method,
                    data: data,
                    dataType: 'JSON',
                    success: function (data) {
                        if (data.success == true) {
                            $("#btnSave").attr("disabled", false);
                            $("#modalNew").modal("hide");
                            $(".input-orders").setFields({data: data});
                            table.ajax.reload();
                            toastr.success(msg);
                        }
                    }
                })
            } else {
                $("#btnSave").attr("disabled", false);
                toastr.error("Campos Requeridos!");
            }
        } else {
            $("#btnSave").attr("disabled", false);
            toastr.error("Plan no seleccionado");
        }
    }

    this.selectionProduct = function (id, description) {
        var total = 0;
        product++;
        $("#service-selected").empty()
        if (product == 1) {

            cont += product;

            total = cont * 8.3;

            console.log("total selec " + total);
            console.log("cont selec " + cont);
            $("#bar-progress").css("width", total + "%").html(total + "% Completado");

            product = 1;

            if (cont == 12) {
                $("#bar-progress").css("width", "100%").html("100% Completado").removeClass("progress-bar-info").addClass("progress-bar-success");
            }

        }
        $(".thumbnail").removeClass("selectedItem");
        $("#item_" + id).toggleClass("selectedItem");
        $("#service-selected").html('<li class="list-group-item"><b>' + description + '</b></li>');

        $("#frm #schema_id").val(id);
    }

    this.showModal = function (id) {
        var frm = $("#frmEdit");
        var data = frm.serialize();
        var url = "/orders/" + id + "/edit";
        $("#modalNew").modal("show");
        $.ajax({
            url: url,
            method: "GET",
            data: data,
            dataType: 'JSON',
            success: function (data) {
                $(".input-orders").setFields({data: data});
            }
        })
    }

    this.delete = function (id) {
        toastr.remove();
        if (confirm("Deseas eliminar")) {
            var token = $("input[name=_token]").val();
            var url = "/orders/" + id;
            $.ajax({
                url: url,
                headers: {'X-CSRF-TOKEN': token},
                method: "DELETE",
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == true) {
                        table.ajax.reload();
                        toastr.warning("Ok");
                    }
                }, error: function (err) {
                    toastr.error("No se puede borrra Este registro");
                }
            })
        }
    }

    this.table = function () {
        return $('#tbl').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/api/listOrders",
            columns: [
                {data: "id"},
                {data: "name"},
                {data: "last_name"},
                {data: "document"},
                {data: "phone"},
                {data: "mobil"},
                {data: "address"},
                {data: "type_document"},
                {data: "city"},
                {data: "department"},
                {data: "responsible"},
                {data: "event"},
                {data: "tiempo_transcurrido"},
                {data: "status"},
            ],
            order: [[1, 'ASC']],
            aoColumnDefs: [
                {
                    aTargets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                    mRender: function (data, type, full) {
                        return '<a href="#" onclick="obj.show(' + full.id + ')">' + data + '</a>';
                    }
                },
                {
                    targets: [14],
                    searchable: false,
                    mData: null,
                    mRender: function (data, type, full) {
                        var role = $("#role_id").val();
                        if (full.event_id == 1) {
                            if (role == 1 || role == 2) {
                                return '<button class="btn btn-success btn-xs" onclick="obj.associate(' + full.id + ')"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>';
                            } else {
                                return '';
                            }
                        } else {
                            return '';
                        }

                    }
                }
            ],

        });
    }



    this.show = function (id) {
        var frm = $("#frm");
        var data = frm.serialize();
        var url = "/orders/" + id + "/edit";

        $.ajax({
            url: url,
            method: "GET",
            data: data,
            dataType: 'JSON',
            success: function (data) {
                $('#myTabs a[href="#manager"]').tab('show');
                $(".input-orders").setFields({data: data});
                $("#btnSave").attr("disabled", true);
            }
        })
    }

}

var obj = new Orders();
obj.init();