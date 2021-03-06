<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Cinpal - Editor de Imagens</title>
    <meta name="description" content="Image Map Pro Editor">
    <meta name="author" content="Nikolay Dyankov">

    <link rel="stylesheet" href="css/libs/bootstrap.localized.css">
    <link rel="stylesheet" href="css/webcraft-tour.css">
    <link rel="stylesheet" href="css/image-map-pro-editor.css">
    <link rel="stylesheet" href="css/image-map-pro.min.css">
</head>

<body>

    <!-- * -->
    <!-- Wrapper -->
    <div id="hm-editor-wrap" class="bootstrap-wrapper editor-loading">
        <div id="hm-editor-inner-wrap">
            <div id="hm-editor-top">
                <!-- Topbar -->
                <div id="hm-editor-topbar-wrap">
                    <div class="pull-left toolbar-block">
                        <h3><img src="http://www.system-dreams.com/cinpal/images/logo.jpg" style="width:120px;" /></h3>
                        <a href="#" class="btn btn-default editor-topbar-button" id="button-new"><span class="glyphicon glyphicon-plus"></span> Novo</a>
                        <a href="#" class="btn btn-default editor-topbar-button" id="button-save"><span class="glyphicon glyphicon-floppy-save"></span> Salvar</a>
                        <a href="#" class="btn btn-default editor-topbar-button" id="button-load"><span class="glyphicon glyphicon-floppy-open"></span> Carregar</a>
                        <a href="#" class="btn btn-default editor-topbar-button" id="button-generate-code"><span class="glyphicon glyphicon-save"></span> Gerar código</a>

                        <a href="#" class="btn btn-primary editor-topbar-button" id="button-undo"><span class="glyphicon glyphicon-trash"></span> Desfazer</a>
                        <a href="#" class="btn btn-primary editor-topbar-button" id="button-redo"><span class="glyphicon glyphicon-repeat"></span> Refazer</a>
                    </div>
                    <div class="pull-right toolbar-block">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary active" id="button-edit-mode"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                            <a href="#" class="btn btn-primary" id="button-preview-mode"><span class="glyphicon glyphicon-play"></span> Preview</a>
                        </div>
                    </div>
                </div>
                <!-- / Topbar -->
            </div>
            <!-- / Editor top -->
            <!-- Editor bottom -->
            <div id="hm-editor-bottom">
                <!-- Toolbar -->
                <div id="hm-toolbar">
                    <div class="btn-group-vertical">
                        <a href="#" class="btn btn-lg btn-default hm-toolbar-button" id="hm-toolbar-button-spot" data-tool="spot" data-toggle="tooltip" data-placement="right" data-original-title="Spot">
                            <div class="hm-icon-tool-spot">
                                <svg width="24px" height="24px" viewPort="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="12" cy="12" rx="6" ry="6"></ellipse>
                                    <line x1="12" y1="2" x2="12" y2="10"></line>
                                    <line x1="14" y1="12" x2="22" y2="12"></line>
                                    <line x1="12" y1="14" x2="12" y2="22"></line>
                                    <line x1="10" y1="12" x2="2" y2="12"></line>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="btn btn-lg btn-default hm-toolbar-button" id="hm-toolbar-button-rect" data-tool="rect" data-toggle="tooltip" data-placement="right" data-original-title="Retangulo"><div class="hm-icon-tool-rect"></div></a>
                        <a href="#" class="btn btn-lg btn-default hm-toolbar-button" id="hm-toolbar-button-oval" data-tool="oval" data-toggle="tooltip" data-placement="right" data-original-title="Ellipse"><div class="hm-icon-tool-oval"></div></a>
                        <a href="#" class="btn btn-lg btn-default hm-toolbar-button" id="hm-toolbar-button-poly" data-tool="poly" data-toggle="tooltip" data-placement="right" data-original-title="Polygono">
                            <div class="hm-icon-tool-poly">
                                <svg width="24px" height="24px" viewPort="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="20,20 18,4 7,7 4,20"></polygon>
                                    <ellipse cx="20" cy="20" rx="3" ry="3"></ellipse>
                                    <ellipse cx="18" cy="4" rx="3" ry="3"></ellipse>
                                    <ellipse cx="7" cy="7" rx="3" ry="3"></ellipse>
                                    <ellipse cx="4" cy="20" rx="3" ry="3"></ellipse>
                                </svg>
                            </div></a>
                        </div>
                    </div>
                    <!-- / Toolbar -->
                    <!-- Sidebar Left -->
                    <div id="hm-editor-sidebar-left-wrap">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="input-name">Número original (sem acentos ou traços)</label>
                                <input type="text" class="form-control" id="input-name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-image-url">URL da imagem</label>
                                <input type="text" class="form-control" id="input-image-url">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-width">Largura</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-width">
                                    <div class="input-group-addon">
                                        px
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-height">Altura</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="input-height">
                                    <div class="input-group-addon">
                                        px
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label data-toggle="tooltip" data-placement="top" data-original-title="The widget will fit its parent and preserve its width/height ratio.">
                                    <input type="checkbox" id="checkbox-responsive"> Responsivo
                                </label>
                            </div>
                            <div class="form-group">
                                <label data-toggle="tooltip" data-placement="top" data-original-title="The tooltips will always follow the mouse.">
                                    <input type="checkbox" id="checkbox-sticky-tooltips"> Legendas
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="select-tooltip-animation">Animação da legenda</label>
                                <select type="text" class="form-control" id="select-tooltip-animation">
                                    <option value="none">None</option>
                                    <option value="grow">Grow</option>
                                    <option value="fade">Fade</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label data-toggle="tooltip" data-placement="top" data-original-title="The tooltips will not go off-screen. (Recommended option)">
                                    <input type="checkbox" id="checkbox-constrain-tooltips"> Extras da legenda
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="select-pageload-animation">Animações da página</label>
                                <select type="text" class="form-control" id="select-pageload-animation">
                                    <option value="none">Nenhuma</option>
                                    <option value="grow">Grow</option>
                                    <option value="fade">Fade</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- / Sidebar Left -->

                    <!-- Canvas -->
                    <div id="hm-editor-canvas-background">
                        <!-- Tips -->
                        <div id="hm-editor-tips-container">
                            <div id="hm-tip-wrap">
                                <div id="hm-tip-close-button">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </div>
                                <div id="hm-tip-content">
                                    conteúdo
                                </div>
                            </div>
                        </div>
                        <div id="hm-editor-canvas">

                        </div>
                        <div id="hm-editor-image-loader">
                            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve"> <path opacity="0.2" fill="#888" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/> <path fill="#888" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z"> <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"/> </path> </svg>
                        </div>
                    </div>
                    <!-- / Canvas -->

                    <!-- Sidebar Right -->
                    <div id="hm-editor-sidebar-right-wrap">
                        <div class="list-group" id="hotspot-list-group">
                            <!-- <a href="#" class="list-group-item hotspot-list-group-item">Hotspot 1</a> -->
                        </div>
                        <div class="hm-editor-sidebar-content" id="hotspot-settings-wrap">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="input-spot-x">X</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-spot-x">
                                            <div class="input-group-addon">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                    <label class="control-label col-sm-2" for="input-spot-y">Y</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-spot-y">
                                            <div class="input-group-addon">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="input-spot-width">Largura</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-spot-width">
                                            <div class="input-group-addon">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                    <label class="control-label col-sm-2" for="input-spot-height">Altura</label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-spot-height">
                                            <div class="input-group-addon">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <legend data-toggle="tab" data-expanded-by-default="false" data-target="#hm-tab-actions" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Ações
                                </legend>
                                <div id="hm-tab-actions">
                                    <div class="form-group">
                                        <label for="select-spot-mouseover-action" class="col-sm-4 control-label">Mouseover</label>
                                        <div class="col-sm-8">
                                            <select id="select-spot-mouseover-action" class="form-control">
                                                <option value="no-action">Sem ação</option>
                                                <option value="show-tooltip">Com ação</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select-spot-click-action" class="col-sm-4 control-label">Click</label>
                                        <div class="col-sm-8">
                                            <select id="select-spot-click-action" class="form-control">
                                                <option value="no-action">Sem ação</option>
                                                <option value="show-tooltip">Com ação</option>
                                                <option value="follow-link">Link de destino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-spot-link" class="col-sm-4 control-label">Link</label>
                                        <div class="col-sm-8">
                                            <input id="input-spot-link" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="checkbox-open-link-in-new-window"> Abrir link em nova aba
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <legend data-toggle="tab" data-target="#hm-tab-default-style" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Estilo padrão
                                </legend>
                                <div id="hm-tab-default-style">
                                    <div class="hm-settings-group-spot-icon">
                                        <div class="well">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" id="checkbox-spot-default-use-icon"> ícone
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hm-settings-group-spot-icon-wrap">
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="btn-group btn-group-justified">
                                                            <a href="#" class="btn btn-default active" id="button-spot-from-library" data-val="library">Da biblioteca</a>
                                                            <a href="#" class="btn btn-default" id="button-spot-custom-url" data-val="custom">Da URL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="hm-settings-group-spot-icon-library">
                                                    <div class="form-group">

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="input-spot-icon-fill">Fill</label>
                                                        <div class="col-sm-2">
                                                            <input type="color" class="form-control" id="input-spot-icon-fill">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="btn btn-block btn-primary" id="button-spot-choose-icon">Escolher ícone</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="hm-settings-group-spot-icon-custom">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="input-spot-default-icon-url">URL do ícone</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="input-spot-default-icon-url">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <div class="checkbox">
                                                            <label data-toggle="tooltip" data-placement="top" data-original-title="The icon will stay centered on its bottom edge, so that it preserves its location more accurately.">
                                                                <input type="checkbox" id="checkbox-spot-default-icon-is-pin"> Ícone como pin
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 col-sm-offset-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="checkbox-spot-default-icon-shadow"> Sombra do ícone
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-default-opacity" data-toggle="tooltip" data-placement="top" data-original-title="Not visible in Edit mode.">Opacidade</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-spot-default-opacity">
                                        </div>
                                        <div class="hm-settings-group-border-radius">
                                            <label class="control-label col-sm-4" for="input-spot-default-border-radius">Border Radius</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-border-radius">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-settings-group-element-styles">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-default-background-color">Cor do Background</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-default-background-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-default-background-opacity">Opacidade do Background</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-background-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="select-spot-default-border-style">Estilo da borda</label>
                                            <div class="col-sm-3">
                                                <select type="text" class="form-control" id="select-spot-default-border-style">
                                                    <option value="none">Nenhum</option>
                                                    <option value="hidden">Esconder</option>
                                                    <option value="solid">Solid</option>
                                                    <option value="dotted">Dotted</option>
                                                    <option value="dashed">Dashed</option>
                                                    <option value="double">Double</option>
                                                    <option value="groove">Groove</option>
                                                    <option value="inset">Inset</option>
                                                    <option value="outset">Outset</option>
                                                </select>
                                            </div>
                                            <label class="control-label col-sm-3" for="input-spot-default-border-width">Largura da borda</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-border-width">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-default-border-color">Cor da borda</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-default-border-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-default-border-opacity">Opacidade da borda</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-border-opacity">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- poly specific options -->
                                    <div class="hm-settings-group-svg">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-default-fill">Fill</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-default-fill">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-default-fill-opacity">Fill Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-fill-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-default-stroke-color">Stroke Color</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-default-stroke-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-default-stroke-opacity">Stroke Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-stroke-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-default-stroke-width">Stroke Width</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-stroke-width">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-default-stroke-dasharray">Stroke Dasharray</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-default-stroke-dasharray">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="select-spot-default-stroke-linecap">Stroke Linecap</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="select-spot-default-stroke-linecap">
                                                    <option value="butt">Butt</option>
                                                    <option value="round">Round</option>
                                                    <option value="square">Square</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <legend data-toggle="tab" data-expanded-by-default="false" data-target="#hm-tab-mouseover-style" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Mouseover Style
                                </legend>
                                <div id="hm-tab-mouseover-style">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-mouseover-opacity">Opacity</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-spot-mouseover-opacity">
                                        </div>
                                        <div class="hm-settings-group-border-radius">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-border-radius">Border Radius</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-border-radius">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hm-settings-group-element-styles">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-background-color">Background Color</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-mouseover-background-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-background-opacity">Background Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-background-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="select-spot-mouseover-border-style">Border Style</label>
                                            <div class="col-sm-3">
                                                <select type="text" class="form-control" id="select-spot-mouseover-border-style">
                                                    <option value="none">None</option>
                                                    <option value="hidden">Hidden</option>
                                                    <option value="solid">Solid</option>
                                                    <option value="dotted">Dotted</option>
                                                    <option value="dashed">Dashed</option>
                                                    <option value="double">Double</option>
                                                    <option value="groove">Groove</option>
                                                    <option value="inset">Inset</option>
                                                    <option value="outset">Outset</option>
                                                </select>
                                            </div>
                                            <label class="control-label col-sm-3" for="input-spot-mouseover-border-width">Border Width</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-border-width">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-border-color">Border Color</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-mouseover-border-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-border-opacity">Border Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-border-opacity">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- poly specific options -->
                                    <div class="hm-settings-group-svg">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-fill">Fill</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-mouseover-fill">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-fill-opacity">Fill Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-fill-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-stroke-color">Stroke Color</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-mouseover-stroke-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-stroke-opacity">Stroke Opacity</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-stroke-opacity">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-stroke-width">Stroke Width</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-stroke-width">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-mouseover-stroke-dasharray">Stroke Dasharray</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-mouseover-stroke-dasharray">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="select-spot-mouseover-stroke-linecap">Stroke Linecap</label>
                                            <div class="col-sm-8">
                                                <select type="text" class="form-control" id="select-spot-mouseover-stroke-linecap">
                                                    <option value="butt">Butt</option>
                                                    <option value="round">Round</option>
                                                    <option value="square">Square</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <legend data-toggle="tab" data-expanded-by-default="false" data-target="#hm-tab-tooltip-style" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Tooltip Style
                                </legend>
                                <div id="hm-tab-tooltip-style">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-width">Width</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-spot-tooltip-width">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="checkbox-spot-auto-tooltip-width"> Auto
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-height">Height</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="input-spot-tooltip-height">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="checkbox-spot-auto-tooltip-height"> Auto
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-padding">Padding</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-spot-tooltip-padding">
                                        </div>
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-border-radius">Border Radius</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-spot-tooltip-border-radius">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-background-color">Background Color</label>
                                        <div class="col-sm-2">
                                            <input type="color" class="form-control" id="input-spot-tooltip-background-color">
                                        </div>
                                        <label class="control-label col-sm-4" for="input-spot-tooltip-background-opacity">Background Opacity</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-spot-tooltip-background-opacity">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="select-spot-tooltip-position">Position</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="select-spot-tooltip-position">
                                                <option value="top">Top</option>
                                                <option value="bottom">Bottom</option>
                                                <option value="left">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <legend data-toggle="tab" data-expanded-by-default="false" data-target="#hm-tab-text-style" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Estilo do texto
                                </legend>
                                <div id="hm-tab-text-style">
                                    <h6>Título</h6>
                                    <div class="well">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-title-color">Cor</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-title-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-title-font-size">Tamanho do texto</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-title-font-size">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-title-font-family">Font Family</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="input-spot-title-font-family">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-title-font-weight">Largura da fonte</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-title-font-weight">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-title-line-height">Altura da linha</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-title-line-height">
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Texto</h6>
                                    <div class="well">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-text-color">Cor</label>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control" id="input-spot-text-color">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-text-font-size">Tamamho da fonte</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-text-font-size">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-text-font-family">Font Family</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="input-spot-text-font-family">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="input-spot-text-font-weight">Peso da noite</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-text-font-weight">
                                            </div>
                                            <label class="control-label col-sm-4" for="input-spot-text-line-height">Altura da linha</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-spot-text-line-height">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <legend data-toggle="tab" data-expanded-by-default="false" data-target="#hm-tab-tooltip-content" class="hm-settings-tab-expanded">
                                    <span class="glyphicon glyphicon-chevron-down hm-icon-settings-tab-expanded"></span>
                                    <span class="glyphicon glyphicon-chevron-up hm-icon-settings-tab-collapsed"></span>
                                    Conteúdo da legenda
                                </legend>
                                <div id="hm-tab-tooltip-content">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="input-spot-title">Título</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-spot-title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="textarea-spot-text">Texto</label>
                                        <div class="col-sm-10">
                                            <textarea rows="4" type="text" class="form-control" id="textarea-spot-text"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- / Sidebar Right -->
                </div>
                <!-- / Editor bottom -->
            </div>

            <!-- Modal: save -->
            <div class="modal" id="modal-save">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Salvar</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group">
                                    <textarea id="textarea-save" class="form-control" rows="10"></textarea>
                                </div>
                            </form>
                            <p class="bg-info">
                                Use esse código para salvar o modelo
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: load -->
            <div class="modal" id="modal-load">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Carregar</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group">
                                    <textarea id="textarea-load" class="form-control" rows="10"></textarea>
                                </div>
                            </form>

                            <p class="bg-danger" id="load-code-error">
                               Ops, ocorreu um erro
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="button-load-confirm">Carregar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: Generate Code -->
            <div class="modal" id="modal-generate-code">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Gerar código</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                Esse é o HTML do modelo construído
                            </div>



                            <pre>
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
<strong><span class="text-info">&lt;link rel=&quot;stylesheet&quot; href=&quot;css/image-map-pro.min.css&quot;&gt;</span></strong>
&lt;/head&gt;
&lt;body&gt;
&lt;div id=&quot;<strong><span class="text-info">image-map-pro-container</span></strong>&quot;&gt;

&lt;script src=&quot;js/jquery.min.js&quot;&gt;&lt;/script&gt;
<strong><span class="text-info">&lt;script src=&quot;js/image-map-pro.min.js&quot;&gt;&lt;/script&gt;</span></strong>
&lt;script type=&quot;text/javascript&quot;&gt;
;(function ($, window, document, undefined) {
    $(document).ready(function() {
    </pre>
    <div class="alert alert-info">
        O código abaixo é para a inicialização do modelo no site da Cinpal
    </div>
    <form class="form">
        <div class="form-group">
            <textarea id="textarea-generated-code" class="form-control" rows="4"></textarea>
        </div>
    </form>
    <pre>
    });
})(jQuery, window, document);
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: saves -->
            <div class="modal" id="modal-saves" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Carregar modelo salvo</h4>
                        </div>
                        <div class="modal-body">
                            <div id="saved-widgets-container" class="list-group col-sm-10">

                            </div>
                            <div id="saved-widgets-controls-container" class="col-sm-2">

                            </div>
                            <button type="button" class="btn btn-primary" id="button-saves-create-new"><span class="glyphicon glyphicon-plus"></span> Criar novo modelo Cinpal</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="modal-confirm-delete-widget" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Você tem certeza?</h4>
                        </div>
                        <div class="modal-body">
                            <div id="saved-widgets-container" class="list-group col-sm-10">

                            </div>
                            <div id="saved-widgets-controls-container" class="col-sm-2">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="button-cancel-delete-widget">Cancelar</button>
                                <button type="button" class="btn btn-danger" id="button-confirm-delete-widget">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: create new -->
            <div class="modal" id="modal-new-widget" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Criar novo modelo Cinpal</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group">
                                    <label class="control-label" for="input-widget-name">Nome figura</label>
                                    <input type="text" class="form-control" id="input-widget-name" placeholder="Nome do modelo">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="button-new-widget-cancel">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="button-new-widget-create">Criar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: delete hotspot -->
            <div class="modal" id="modal-confirm-delete-hotspot">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Apagar modelo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" id="button-confirm-delete-hotspot">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: choose icon -->
            <div class="modal" id="modal-choose-icon">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Escolher ícone</h4>
                        </div>
                        <div class="modal-body">
                            <div class="well" id="hm-spot-icons-container">
                                <div class="hm-spot-icon" data-url=""></div>
                            </div>
                            <div>Icones feitos por <a href="http://www.freepik.com" title="Freepik">Freepik</a> de <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             e a licença <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- / Wrapper -->
        <!-- * -->

        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/bootstrap.min.js"></script>
        <script src="js/image-map-pro.min.js"></script>
        <script src="js/webcraft-tour.js"></script>
        <script src="js/webcraft-icons.js"></script>
        <script src="js/image-map-pro-editor.js"></script>
        <script src="js/image-map-pro-editor-content.js"></script>
        <script src="js/image-map-pro-editor-local-storage.js"></script>

        <script>
        ;(function ( $, window, document, undefined ) {
            $(document).ready(function() {
                $.image_map_pro_init_editor();
            });
        })( jQuery, window, document );
        </script>
    </body>
    </html>
