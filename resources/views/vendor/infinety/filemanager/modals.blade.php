<!-- Modal Create Folder -->
<div class="modal fade" id="modalCreateFolder" tabindex="-1" role="dialog" aria-labelledby="modalFillInLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Nueva carpeta</span> nombre</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                        <input type="text" placeholder="nombre de la nueva carpeta" class="form-control input-lg" id="folder-name" name="folder-name">
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" id="create-folder" class="btn btn-primary btn-lg btn-large fs-15">Crear carpeta</button>
                    </div>
                </div>
                <p class="text-left hinted-text p-t-10 p-r-10">Una nueva carpeta se creara.</p>
            </div>
            <div class="modal-footer">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Modal Create Folder -->

<!-- Modal Rename Folders and Files -->
<div class="modal fade" id="modalRename" tabindex="-1" role="dialog" aria-labelledby="modalFillInLabel" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
    </button>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Renombrar</span> <span class="file-info hide">este archivo</span> <span class="folder-info hide">esta carpeta</span></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="type-rename">
                    <input type="hidden" id="path">
                    <div class="col-md-9">
                        <div class="input-group" id="data-rename">
                            <input type="text" placeholder="Tu nuevo nombre" class="form-control input-lg" id="new-name" name="new-name">
                            <span class="input-group-addon extension-info" id="new-ext"></span>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" id="rename-file" class="btn btn-primary btn-lg btn-large fs-15">Renombrar</button>
                    </div>
                </div>
                <p class="text-left hinted-text p-t-10 p-r-10">
                    <span>Si el nuevo nombre existe, se agregara una cadena para identificarlo</span>
                </p>
            </div>
            <div class="modal-footer">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Modal Create Folder -->

<!-- Modal Preview -->
<div class="modal fade" id="previewInfo" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">

                </div>
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="pg-close fs-14"></i>
                    </button>
                    <div class="row">
                        <div class="col-md-8" id="modal-preview">

                        </div>
                        <div class="col-md-4 b-l b-grey" id="modal-info">
                            <ul class="no-style">
                                <li><b>Nombre</b>: <span id="modal-name"></span></li>
                                <li><b>Tamaño</b>: <span id="modal-size"></span></li>
                                <li class="hide"><b>Alto</b>: <span id="modal-height"></span></li>
                                <li class="hide"><b>Ancho</b>: <span id="modal-width"></span></li>
                            </ul>
                            <button class="btn btn-complete m-t-30 hide">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- End Modal Preview -->
