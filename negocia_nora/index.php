<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="./estilos.css">

  <meta http-equiv="Expires" content="0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <!--SIMPLEBAR-->
  <link rel="stylesheet" href="./base_files/simplebar.min.js.descarga">

  <!--AUTOSIZE-->
  <script src="./base_files/autosize.min.js.descarga"></script>


  <!-- JQUERY -->
  <script src="./base_files/jquery-3.0.0.min.js.descarga" type="text/javascript"></script>

  <!-- JS PRINTER -->
  <script src="./base_files/fn_printer.js.descarga" type="text/javascript"></script>

  <!-- BOOTSTRAP -->
  <link href="./base_files/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">

  <!-- Responsive Table css -->
  <link href="./base_files/rwd-table.min.css" rel="stylesheet" type="text/css">


  <!-- PLUGIN JQUERY SELECT MULTIPLE -->
  <link href="./base_files/bootstrap-select.min.css" rel="stylesheet" type="text/css">
  <script src="./base_files/bootstrap-select.min.js.descarga" type="text/javascript"></script>

  <!-- STYLE CSS PRINCIPAL -->
  <link href="./base_files/style.css" rel="stylesheet" type="text/css">
  <link href="./base_files/css_header.php" rel="stylesheet" type="text/css">
  <link href="./base_files/all.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="./base_files/css2" rel="stylesheet">
  <link href="./base_files/css_negocia.css" rel="stylesheet" type="text/css">
  <link href="./base_files/paginacion_dinamica.css" rel="stylesheet" type="text/css">

  <!-- RECURSOS CSS NEGOCIA LAB SAC -->
  <link href="./base_files/recursos_negocia_lab_sac.css" rel="stylesheet" type="text/css">

  <!-- V1 - 2020 - CSS -->
  <link href="./base_files/v1-2020.css" rel="stylesheet" type="text/css">

  <!-- FSELECT JQUERY -->
  <script src="./base_files/fselect.js.descarga" type="text/javascript"></script>

  <!-- JS PRINCIPAL -->
  <script src="./base_files/funcion_ajax.js.descarga" type="text/javascript"></script>

  <!-- SELECT2 - NUEVO -->
  <link href="./base_files/select2.min.css" rel="stylesheet">
  <script src="./base_files/select2.min.js.descarga"></script>

  <script src="./base_files/qrcode.min.js.descarga"></script>


  <!-- COLOR - colorPick -->
  <link href="./base_files/colorPick.dark.theme.css" rel="stylesheet">
  <link href="./base_files/colorPick.css" rel="stylesheet">
  <link href="./base_files/colorPick.min.css" rel="stylesheet">


  <script src="./base_files/colorPick.js.descarga"></script>
  <!-- <script src="https://produccion.negocia.pe/crm/assets/js/colorPick/colorPick.min.js?v=5"></script> -->

  <!-- JS COPIAR - TEXTO -->
  <script src="./base_files/clipboard.min.js.descarga" type="text/javascript"></script>

  <!-- MENU NEGOCIA -->
  <script src="./base_files/main_menu.js.descarga" type="text/javascript"></script>
  <link href="./base_files/sb-admin.css" rel="stylesheet">

  <!-- ICONOS FONT AWESOME -->
  <link href="./base_files/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- ALERTAS SWEETALERT -->
  <link rel="stylesheet" href="./base_files/sweetalert2.min.css">
  <script src="./base_files/sweetalert2.all.min.js.descarga"></script>
  <style type="text/css">
    html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow-y: hidden;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-icon {
      margin: 0 0 15px;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-buttonswrapper {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-item-align: stretch;
      align-self: stretch;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
      height: 32px;
      font-size: 14px;
      margin: 5px auto;
    }

    body.swal2-toast-shown>.swal2-container {
      position: fixed;
      background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-shown {
      background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top {
      top: 0;
      left: 50%;
      bottom: auto;
      right: auto;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-end,
    body.swal2-toast-shown>.swal2-container.swal2-top-right {
      top: 0;
      left: auto;
      bottom: auto;
      right: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-start,
    body.swal2-toast-shown>.swal2-container.swal2-top-left {
      top: 0;
      left: 0;
      bottom: auto;
      right: auto;
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-start,
    body.swal2-toast-shown>.swal2-container.swal2-center-left {
      top: 50%;
      left: 0;
      bottom: auto;
      right: auto;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center {
      top: 50%;
      left: 50%;
      bottom: auto;
      right: auto;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-end,
    body.swal2-toast-shown>.swal2-container.swal2-center-right {
      top: 50%;
      left: auto;
      bottom: auto;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-start,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-left {
      top: auto;
      left: 0;
      bottom: 0;
      right: auto;
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom {
      top: auto;
      left: 50%;
      bottom: 0;
      right: auto;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-end,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
      top: auto;
      left: auto;
      bottom: 0;
      right: 0;
    }

    body.swal2-iosfix {
      position: fixed;
      left: 0;
      right: 0;
    }

    body.swal2-no-backdrop>.swal2-shown {
      top: auto;
      bottom: auto;
      left: auto;
      right: auto;
      background-color: transparent;
    }

    body.swal2-no-backdrop>.swal2-shown>.swal2-modal {
      -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-top {
      top: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-top-start,
    body.swal2-no-backdrop>.swal2-shown.swal2-top-left {
      top: 0;
      left: 0;
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-top-end,
    body.swal2-no-backdrop>.swal2-shown.swal2-top-right {
      top: 0;
      right: 0;
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-center {
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-center-start,
    body.swal2-no-backdrop>.swal2-shown.swal2-center-left {
      top: 50%;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-center-end,
    body.swal2-no-backdrop>.swal2-shown.swal2-center-right {
      top: 50%;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-bottom {
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-bottom-start,
    body.swal2-no-backdrop>.swal2-shown.swal2-bottom-left {
      bottom: 0;
      left: 0;
    }

    body.swal2-no-backdrop>.swal2-shown.swal2-bottom-end,
    body.swal2-no-backdrop>.swal2-shown.swal2-bottom-right {
      bottom: 0;
      right: 0;
    }

    .swal2-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      position: fixed;
      padding: 10px;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: transparent;
      z-index: 1060;
    }

    .swal2-container.swal2-top {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .swal2-container.swal2-top-start,
    .swal2-container.swal2-top-left {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
    }

    .swal2-container.swal2-center {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .swal2-container.swal2-center-start,
    .swal2-container.swal2-center-left {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
    }

    .swal2-container.swal2-bottom-start,
    .swal2-container.swal2-bottom-left {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-item-align: stretch;
      align-self: stretch;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .swal2-container.swal2-grow-column {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-top,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-bottom {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-top-start,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-bottom-left {
      -webkit-box-align: start;
      -ms-flex-align: start;
      align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-top-right,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-bottom-right {
      -webkit-box-align: end;
      -ms-flex-align: end;
      align-items: flex-end;
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
      margin: auto;
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-container .swal2-modal {
        margin: 0 !important;
      }
    }

    .swal2-container.swal2-fade {
      -webkit-transition: background-color .1s;
      transition: background-color .1s;
    }

    .swal2-container.swal2-shown {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #fff;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      border-radius: 5px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      text-align: center;
      overflow-x: hidden;
      overflow-y: auto;
      display: none;
      position: relative;
      max-width: 100%;
    }

    .swal2-popup.swal2-toast {
      width: 300px;
      padding: 0 15px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      overflow-y: hidden;
      -webkit-box-shadow: 0 0 10px #d9d9d9;
      box-shadow: 0 0 10px #d9d9d9;
    }

    .swal2-popup.swal2-toast .swal2-title {
      max-width: 300px;
      font-size: 16px;
      text-align: left;
    }

    .swal2-popup.swal2-toast .swal2-content {
      font-size: 14px;
      text-align: left;
    }

    .swal2-popup.swal2-toast .swal2-icon {
      width: 32px;
      min-width: 32px;
      height: 32px;
      margin: 0 15px 0 0;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 32px;
      height: 32px;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-info,
    .swal2-popup.swal2-toast .swal2-icon.swal2-warning,
    .swal2-popup.swal2-toast .swal2-icon.swal2-question {
      font-size: 26px;
      line-height: 32px;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: 14px;
      width: 22px;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      left: 5px;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      right: 5px;
    }

    .swal2-popup.swal2-toast .swal2-buttonswrapper {
      margin: 0 0 0 5px;
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 0 0 5px;
      padding: 5px 10px;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
      box-shadow: 0 0 0 1px #fff, 0 0 0 2px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-validationerror {
      width: 100%;
      margin: 5px -20px;
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #228B22;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      border-radius: 50%;
      position: absolute;
      width: 32px;
      height: 64px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      border-radius: 64px 0 0 64px;
      top: -4px;
      left: -15px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 32px 32px;
      transform-origin: 32px 32px;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      border-radius: 0 64px 64px 0;
      top: -5px;
      left: 14px;
      -webkit-transform-origin: 0 32px;
      transform-origin: 0 32px;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 32px;
      height: 32px;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      width: 7px;
      height: 90px;
      left: 28px;
      top: 8px;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: 5px;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
      width: 12px;
      left: 3px;
      top: 18px;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
      width: 22px;
      right: 3px;
      top: 15px;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-line-tip {
      -webkit-animation: animate-toast-success-tip .75s;
      animation: animate-toast-success-tip .75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-line-long {
      -webkit-animation: animate-toast-success-long .75s;
      animation: animate-toast-success-long .75s;
    }

    .swal2-popup:focus {
      outline: none;
    }

    .swal2-popup.swal2-loading {
      overflow-y: hidden;
    }

    .swal2-popup .swal2-title {
      color: #595959;
      font-size: 30px;
      text-align: center;
      font-weight: 600;
      text-transform: none;
      position: relative;
      margin: 0 0 .4em;
      padding: 0;
      display: block;
      word-wrap: break-word;
    }

    .swal2-popup .swal2-buttonswrapper {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-top: 15px;
    }

    .swal2-popup .swal2-buttonswrapper:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4;
      cursor: no-drop;
    }

    .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-confirm {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      border: 4px solid transparent;
      border-color: transparent;
      width: 40px;
      height: 40px;
      padding: 0;
      margin: 7.5px;
      vertical-align: top;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      border-radius: 100%;
      -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
      animation: rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .swal2-popup .swal2-buttonswrapper.swal2-loading .swal2-styled.swal2-cancel {
      margin-left: 30px;
      margin-right: 30px;
    }

    .swal2-popup .swal2-buttonswrapper.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      content: '';
      margin-left: 5px;
      vertical-align: -1px;
      height: 15px;
      width: 15px;
      border: 3px solid #999999;
      -webkit-box-shadow: 1px 1px 1px #fff;
      box-shadow: 1px 1px 1px #fff;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
      animation: rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
      border: 0;
      border-radius: 3px;
      -webkit-box-shadow: none;
      box-shadow: none;
      color: #fff;
      cursor: pointer;
      font-size: 17px;
      font-weight: 500;
      margin: 15px 5px 0;
      padding: 10px 32px;
    }

    .swal2-popup .swal2-styled:focus {
      outline: none;
      -webkit-box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-image {
      margin: 20px auto;
      max-width: 100%;
    }

    .swal2-popup .swal2-close {
      background: transparent;
      border: 0;
      margin: 0;
      padding: 0;
      width: 38px;
      height: 40px;
      font-size: 36px;
      line-height: 40px;
      font-family: serif;
      position: absolute;
      top: 5px;
      right: 8px;
      cursor: pointer;
      color: #cccccc;
      -webkit-transition: color .1s ease;
      transition: color .1s ease;
    }

    .swal2-popup .swal2-close:hover {
      color: #d55;
    }

    .swal2-popup>.swal2-input,
    .swal2-popup>.swal2-file,
    .swal2-popup>.swal2-textarea,
    .swal2-popup>.swal2-select,
    .swal2-popup>.swal2-radio,
    .swal2-popup>.swal2-checkbox {
      display: none;
    }

    .swal2-popup .swal2-content {
      font-size: 18px;
      text-align: center;
      font-weight: 300;
      position: relative;
      float: none;
      margin: 0;
      padding: 0;
      line-height: normal;
      color: #545454;
      word-wrap: break-word;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-checkbox {
      margin: 20px auto;
    }

    .swal2-popup .swal2-input,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-textarea {
      width: 100%;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      font-size: 18px;
      border-radius: 3px;
      border: 1px solid #d9d9d9;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      -webkit-transition: border-color .3s, -webkit-box-shadow .3s;
      transition: border-color .3s, -webkit-box-shadow .3s;
      transition: border-color .3s, box-shadow .3s;
      transition: border-color .3s, box-shadow .3s, -webkit-box-shadow .3s;
    }

    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      -webkit-box-shadow: 0 0 2px #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
      outline: none;
      border: 1px solid #b4dbed;
      -webkit-box-shadow: 0 0 3px #c4e6f5;
      box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #cccccc;
    }

    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #cccccc;
    }

    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #cccccc;
    }

    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #cccccc;
    }

    .swal2-popup .swal2-range input {
      float: left;
      width: 80%;
    }

    .swal2-popup .swal2-range output {
      float: right;
      width: 20%;
      font-size: 20px;
      font-weight: 600;
      text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
      height: 43px;
      line-height: 43px;
      vertical-align: middle;
      margin: 20px auto;
      padding: 0;
    }

    .swal2-popup .swal2-input {
      height: 43px;
      padding: 0 12px;
    }

    .swal2-popup .swal2-input[type='number'] {
      max-width: 150px;
    }

    .swal2-popup .swal2-file {
      font-size: 20px;
    }

    .swal2-popup .swal2-textarea {
      height: 108px;
      padding: 12px;
    }

    .swal2-popup .swal2-select {
      color: #545454;
      font-size: inherit;
      padding: 5px 10px;
      min-width: 40%;
      max-width: 100%;
    }

    .swal2-popup .swal2-radio {
      border: 0;
    }

    .swal2-popup .swal2-radio label:not(:first-child) {
      margin-left: 20px;
    }

    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-radio span {
      vertical-align: middle;
    }

    .swal2-popup .swal2-radio input {
      margin: 0 3px 0 0;
    }

    .swal2-popup .swal2-checkbox {
      color: #545454;
    }

    .swal2-popup .swal2-checkbox input,
    .swal2-popup .swal2-checkbox span {
      vertical-align: middle;
    }

    .swal2-popup .swal2-validationerror {
      background-color: #f0f0f0;
      margin: 0 -20px;
      overflow: hidden;
      padding: 10px;
      color: gray;
      font-size: 16px;
      font-weight: 300;
      display: none;
    }

    .swal2-popup .swal2-validationerror::before {
      content: '!';
      display: inline-block;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: #ea7d7d;
      color: #fff;
      line-height: 24px;
      text-align: center;
      margin-right: 10px;
    }

    @supports (-ms-accelerator: true) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    .swal2-icon {
      width: 80px;
      height: 80px;
      border: 4px solid transparent;
      border-radius: 50%;
      margin: 20px auto 30px;
      padding: 0;
      position: relative;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      cursor: default;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .swal2-icon.swal2-error {
      border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      display: block;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      position: absolute;
      height: 5px;
      width: 47px;
      background-color: #f27474;
      display: block;
      top: 37px;
      border-radius: 2px;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 17px;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      right: 16px;
    }

    .swal2-icon.swal2-warning {
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #f8bb86;
      border-color: #facea8;
      font-size: 60px;
      line-height: 80px;
      text-align: center;
    }

    .swal2-icon.swal2-info {
      font-family: 'Open Sans', sans-serif;
      color: #3fc3ee;
      border-color: #9de0f6;
      font-size: 60px;
      line-height: 80px;
      text-align: center;
    }

    .swal2-icon.swal2-question {
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #87adbd;
      border-color: #c9dae1;
      font-size: 60px;
      line-height: 80px;
      text-align: center;
    }

    .swal2-icon.swal2-success {
      border-color: #228B22;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      border-radius: 50%;
      position: absolute;
      width: 60px;
      height: 120px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      border-radius: 120px 0 0 120px;
      top: -7px;
      left: -33px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 60px 60px;
      transform-origin: 60px 60px;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      border-radius: 0 120px 120px 0;
      top: -11px;
      left: 30px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 0 60px;
      transform-origin: 0 60px;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
      width: 80px;
      height: 80px;
      border: 4px solid rgba(165, 220, 134, 0.2);
      border-radius: 50%;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      position: absolute;
      left: -4px;
      top: -4px;
      z-index: 2;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
      width: 7px;
      height: 90px;
      position: absolute;
      left: 28px;
      top: 8px;
      z-index: 1;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'] {
      height: 5px;
      background-color: #228B22;
      display: block;
      border-radius: 2px;
      position: absolute;
      z-index: 2;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
      width: 25px;
      left: 14px;
      top: 46px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
      width: 47px;
      right: 8px;
      top: 38px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-progresssteps {
      font-weight: 600;
      margin: 0 0 20px;
      padding: 0;
    }

    .swal2-progresssteps li {
      display: inline-block;
      position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
      background: #3085d6;
      border-radius: 2em;
      color: #fff;
      height: 2em;
      line-height: 2em;
      text-align: center;
      width: 2em;
      z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
      background: #3085d6;
      height: .4em;
      margin: 0 -1px;
      z-index: 10;
    }

    [class^='swal2'] {
      -webkit-tap-highlight-color: transparent;
    }

    @-webkit-keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-10px) rotateZ(2deg);
        transform: translateY(-10px) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: .5;
      }

      66% {
        -webkit-transform: translateY(5px) rotateZ(2deg);
        transform: translateY(5px) rotateZ(2deg);
        opacity: .7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-10px) rotateZ(2deg);
        transform: translateY(-10px) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: .5;
      }

      66% {
        -webkit-transform: translateY(5px) rotateZ(2deg);
        transform: translateY(5px) rotateZ(2deg);
        opacity: .7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @-webkit-keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: .5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: .5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @-webkit-keyframes showSweetAlert {
      0% {
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes showSweetAlert {
      0% {
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes hideSweetAlert {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @keyframes hideSweetAlert {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    .swal2-show {
      -webkit-animation: showSweetAlert .3s;
      animation: showSweetAlert .3s;
    }

    .swal2-show.swal2-toast {
      -webkit-animation: showSweetToast .5s;
      animation: showSweetToast .5s;
    }

    .swal2-show.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    .swal2-hide {
      -webkit-animation: hideSweetAlert .15s forwards;
      animation: hideSweetAlert .15s forwards;
    }

    .swal2-hide.swal2-toast {
      -webkit-animation: hideSweetToast .2s forwards;
      animation: hideSweetToast .2s forwards;
    }

    .swal2-hide.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    [dir='rtl'] .swal2-close {
      left: 8px;
      right: auto;
    }

    @-webkit-keyframes animate-success-tip {
      0% {
        width: 0;
        left: 1px;
        top: 19px;
      }

      54% {
        width: 0;
        left: 1px;
        top: 19px;
      }

      70% {
        width: 50px;
        left: -8px;
        top: 37px;
      }

      84% {
        width: 17px;
        left: 21px;
        top: 48px;
      }

      100% {
        width: 25px;
        left: 14px;
        top: 45px;
      }
    }

    @keyframes animate-success-tip {
      0% {
        width: 0;
        left: 1px;
        top: 19px;
      }

      54% {
        width: 0;
        left: 1px;
        top: 19px;
      }

      70% {
        width: 50px;
        left: -8px;
        top: 37px;
      }

      84% {
        width: 17px;
        left: 21px;
        top: 48px;
      }

      100% {
        width: 25px;
        left: 14px;
        top: 45px;
      }
    }

    @-webkit-keyframes animate-success-long {
      0% {
        width: 0;
        right: 46px;
        top: 54px;
      }

      65% {
        width: 0;
        right: 46px;
        top: 54px;
      }

      84% {
        width: 55px;
        right: 0;
        top: 35px;
      }

      100% {
        width: 47px;
        right: 8px;
        top: 38px;
      }
    }

    @keyframes animate-success-long {
      0% {
        width: 0;
        right: 46px;
        top: 54px;
      }

      65% {
        width: 0;
        right: 46px;
        top: 54px;
      }

      84% {
        width: 55px;
        right: 0;
        top: 35px;
      }

      100% {
        width: 47px;
        right: 8px;
        top: 38px;
      }
    }

    @-webkit-keyframes animate-toast-success-tip {
      0% {
        width: 0;
        left: 1px;
        top: 9px;
      }

      54% {
        width: 0;
        left: 1px;
        top: 9px;
      }

      70% {
        width: 24px;
        left: -4px;
        top: 17px;
      }

      84% {
        width: 8px;
        left: 10px;
        top: 20px;
      }

      100% {
        width: 12px;
        left: 3px;
        top: 18px;
      }
    }

    @keyframes animate-toast-success-tip {
      0% {
        width: 0;
        left: 1px;
        top: 9px;
      }

      54% {
        width: 0;
        left: 1px;
        top: 9px;
      }

      70% {
        width: 24px;
        left: -4px;
        top: 17px;
      }

      84% {
        width: 8px;
        left: 10px;
        top: 20px;
      }

      100% {
        width: 12px;
        left: 3px;
        top: 18px;
      }
    }

    @-webkit-keyframes animate-toast-success-long {
      0% {
        width: 0;
        right: 22px;
        top: 26px;
      }

      65% {
        width: 0;
        right: 22px;
        top: 26px;
      }

      84% {
        width: 26px;
        right: 0;
        top: 15px;
      }

      100% {
        width: 22px;
        right: 3px;
        top: 15px;
      }
    }

    @keyframes animate-toast-success-long {
      0% {
        width: 0;
        right: 22px;
        top: 26px;
      }

      65% {
        width: 0;
        right: 22px;
        top: 26px;
      }

      84% {
        width: 26px;
        right: 0;
        top: 15px;
      }

      100% {
        width: 22px;
        right: 3px;
        top: 15px;
      }
    }

    @-webkit-keyframes rotatePlaceholder {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    @keyframes rotatePlaceholder {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    .swal2-animate-success-line-tip {
      -webkit-animation: animate-success-tip .75s;
      animation: animate-success-tip .75s;
    }

    .swal2-animate-success-line-long {
      -webkit-animation: animate-success-long .75s;
      animation: animate-success-long .75s;
    }

    .swal2-success.swal2-animate-success-icon .swal2-success-circular-line-right {
      -webkit-animation: rotatePlaceholder 4.25s ease-in;
      animation: rotatePlaceholder 4.25s ease-in;
    }

    @-webkit-keyframes animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        opacity: 1;
      }
    }

    @keyframes animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        opacity: 1;
      }
    }

    .swal2-animate-error-icon {
      -webkit-animation: animate-error-icon .5s;
      animation: animate-error-icon .5s;
    }

    @-webkit-keyframes animate-x-mark {
      0% {
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        margin-top: 26px;
        opacity: 0;
      }

      50% {
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        margin-top: 26px;
        opacity: 0;
      }

      80% {
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
        margin-top: -6px;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        margin-top: 0;
        opacity: 1;
      }
    }

    @keyframes animate-x-mark {
      0% {
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        margin-top: 26px;
        opacity: 0;
      }

      50% {
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        margin-top: 26px;
        opacity: 0;
      }

      80% {
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
        margin-top: -6px;
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        margin-top: 0;
        opacity: 1;
      }
    }

    .swal2-animate-x-mark {
      -webkit-animation: animate-x-mark .5s;
      animation: animate-x-mark .5s;
    }

    @-webkit-keyframes rotate-loading {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes rotate-loading {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>

  <!-- VENTANA PARA IMPRIMIR -->
  <script src="./base_files/VentanaCentrada.js.descarga" type="text/javascript"></script>

  <!-- GRAFICOS -->
  <script src="./base_files/Chart.bundle.min.js.descarga" type="text/javascript"></script>
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>
  <script src="./base_files/Chart.min.js.descarga" type="text/javascript"></script>
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>

  <!-- HINT OFICIALES NEGOCIA -->
  <link href="./base_files/hint.css" rel="stylesheet" type="text/css">

  <!--NUEVOS METAS -->


  <!-- Icons Css -->
  <link href="./base_files/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="./base_files/app.min.css" id="app-style" rel="stylesheet" type="text/css">
  <!-- CRM Css-->
  <link href="./base_files/style_crm_general.css" rel="stylesheet" type="text/css">

  <!-- alertifyjs Css -->
  <link href="./base_files/alertify.min.css" rel="stylesheet" type="text/css">
  <!-- alertifyjs default themes  Css -->
  <link href="./base_files/default.min.css" rel="stylesheet" type="text/css">
  <!-- alertifyjs js -->
  <script src="./base_files/alertify.min.js.descarga"></script>

  <!--COD PAISES-->
  <link rel="stylesheet" href="./base_files/intlTelInput.css">
  <script src="./base_files/intlTelInput.min.js.descarga"></script>

  <!-- ICONO LOGO -->
  <link rel="apple-touch-icon" sizes="57x57"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-57x57.png?v=1">
  <link rel="apple-touch-icon" sizes="60x60"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-60x60.png?v=1">
  <link rel="apple-touch-icon" sizes="72x72"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-72x72.png?v=1">
  <link rel="apple-touch-icon" sizes="76x76"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-76x76.png?v=1">
  <link rel="apple-touch-icon" sizes="114x114"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-114x114.png?v=1">
  <link rel="apple-touch-icon" sizes="120x120"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-120x120.png?v=1">
  <link rel="apple-touch-icon" sizes="144x144"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-144x144.png?v=1">
  <link rel="apple-touch-icon" sizes="152x152"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-152x152.png?v=1">
  <link rel="apple-touch-icon" sizes="180x180"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/apple-icon-180x180.png?v=1">
  <link rel="icon" type="image/png" sizes="192x192"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/android-icon-192x192.png?v=1">
  <link rel="icon" type="image/png" sizes="32x32"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/favicon-32x32.png?v=1">
  <link rel="icon" type="image/png" sizes="96x96"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/favicon-96x96.png?v=1">
  <link rel="icon" type="image/png" sizes="16x16"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/favicon-16x16.png?v=1">
  <link rel="manifest" href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/manifest.json?v=1">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage"
    content="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/ms-icon-144x144.png?v=1">
  <meta name="theme-color" content="#ccc8c8">


  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="apple-touch-startup-image"
    href="https://wuandos3-img-recursos.s3.amazonaws.com/favicon/favicon-32x32.png?v=1">
  <!--<link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">-->
  <title>Configuraciones - NEGOCIA LAB S.A.C.</title>

  <style type="text/css">
    .apexcharts-canvas {
      position: relative;
      user-select: none;
      /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }


    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, .5);
      box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }


    .apexcharts-inner {
      position: relative;
    }

    .apexcharts-text tspan {
      font-family: inherit;
    }

    .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.20;
    }

    .apexcharts-series-collapsed {
      opacity: 0;
    }

    .apexcharts-tooltip {
      border-radius: 5px;
      box-shadow: 2px 2px 6px -4px #999;
      cursor: default;
      font-size: 14px;
      left: 62px;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 20px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      white-space: nowrap;
      z-index: 12;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
      border: 1px solid #e3e3e3;
      background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
      color: #fff;
      background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
      font-family: inherit;
    }


    .apexcharts-tooltip-title {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
      background: #ECEFF1;
      border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
      background: rgba(0, 0, 0, 0.7);
      border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      display: inline-block;
      font-weight: 600;
      margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
      display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      font-weight: 600;
    }

    .apexcharts-tooltip-marker {
      min-width: 12px;
      min-height: 12px;
      position: relative;
      top: 0px;
      margin-right: 10px;
      border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
      padding: 0 10px;
      display: none;
      text-align: left;
      justify-content: left;
      align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
      opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
      padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
      opacity: 0;
      height: 0;
      line-height: 0;
      padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
      padding: 6px 0 5px;
    }

    .apexcharts-tooltip-box,
    .apexcharts-custom-tooltip {
      padding: 4px 8px;
    }

    .apexcharts-tooltip-boxPlot {
      display: flex;
      flex-direction: column-reverse;
    }

    .apexcharts-tooltip-box>div {
      margin: 4px 0;
    }

    .apexcharts-tooltip-box span.value {
      font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
      padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
      font-weight: 600;
      color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
      opacity: 0;
      padding: 9px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
      transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
      bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
      top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
      border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
      border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
      border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
      opacity: 0;
      padding: 4px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
      left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
      right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
      border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
      border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
      border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
      border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
      opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
      display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
      pointer-events: none;
      opacity: 0;
      transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
      opacity: 0;
    }

    .apexcharts-selection-rect {
      cursor: move;
    }

    .svg_select_boundingRect,
    .svg_select_points_rot {
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_boundingRect,
    .apexcharts-selection-rect+g .svg_select_points_rot {
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_points_l,
    .apexcharts-selection-rect+g .svg_select_points_r {
      cursor: ew-resize;
      opacity: 1;
      visibility: visible;
    }

    .svg_select_points {
      fill: #efefef;
      stroke: #333;
      rx: 2;
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
      cursor: crosshair
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-pan {
      cursor: move
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
      cursor: pointer;
      width: 20px;
      height: 20px;
      line-height: 24px;
      color: #6E8192;
      text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
      fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
      fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
      fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
      fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
      position: relative;
    }

    .apexcharts-reset-icon {
      margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
      transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
      transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
      margin-right: 3px;
    }

    .apexcharts-pan-icon {
      transform: scale(0.62);
      position: relative;
      left: 1px;
      top: 0px;
    }

    .apexcharts-pan-icon svg {
      fill: #fff;
      stroke: #6E8192;
      stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
      stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
      stroke: #333;
    }

    .apexcharts-toolbar {
      position: absolute;
      z-index: 11;
      max-width: 176px;
      text-align: right;
      border-radius: 3px;
      padding: 0px 6px 2px 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .apexcharts-menu {
      background: #fff;
      position: absolute;
      top: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      padding: 3px;
      right: 10px;
      opacity: 0;
      min-width: 110px;
      transition: 0.15s ease all;
      pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
      opacity: 1;
      pointer-events: all;
      transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
      padding: 6px 7px;
      font-size: 12px;
      cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
      background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
    }

    @media screen and (min-width: 768px) {
      .apexcharts-canvas:hover .apexcharts-toolbar {
        opacity: 1;
      }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
      cursor: default;
      pointer-events: none;
    }

    .apexcharts-pie-label-delay {
      opacity: 0;
      animation-name: opaque;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
      animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
      opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect,
    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line,
    .apexcharts-zoom-rect,
    .apexcharts-toolbar svg,
    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
      pointer-events: none;
    }


    /* markers */

    .apexcharts-marker {
      transition: 0.15s ease all;
    }

    @keyframes opaque {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }


    /* Resize generated styles */

    @keyframes resizeanim {
      from {
        opacity: 0;
      }

      to {
        opacity: 0;
      }
    }

    .resize-triggers {
      animation: 1ms resizeanim;
      visibility: hidden;
      opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .resize-triggers>div {
      background: #eee;
      overflow: auto;
    }

    .contract-trigger:before {
      width: 200%;
      height: 200%;
    }
  </style>
</head>



<body data-sidebar-size="lg" class="pace-done nlabsac_body_diurno">



  <div id="layout-wrapper">

    <!--HEADER-->
    <header id="page-topbar">
      <div class="navbar-header" style="width: 100% !important; margin: 0; padding: 0;">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box d-flex justify-content-center"
            style="background: #EBEBEB; -webkit-box-shadow:none;">
            <div id="image_logo">
              <a id="guia_popup6" href="https://produccion.negocia.pe/Inicio.php" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="./base_files/2_1652397460_12052022181740_16523974608.png" alt="" height="25"
                    style="max-width: 61px;">
                </span>
                <span class="logo-lg">
                  <img src="./base_files/2_1652397460_12052022181740_16523974608.png" alt="" height="45px">
                  <span class="logo-txt">
                  </span>
                </span>
              </a>
              <script>
                //$('#medio_pagos_adicionales').modal('show');
              </script>
            </div>
            <div id="cambiar_session_ingreso_sistema"></div>
            <a href="https://produccion.negocia.pe/functions/users/ArrayInicio.php" class="logo logo-light">
              <span class="logo-sm">
                <img src="https://produccion.negocia.pe/functions/users/index.php" alt="" height="25"
                  style="max-width: 61px;">
              </span>
              <span class="logo-lg">
                <img src="https://produccion.negocia.pe/functions/users/index.php" height="45px">
                <span class="logo-txt">

                </span>
              </span>
            </a>

          </div>



          <button type="button" class="btn btn-sm  font-size-16 header-item" id="vertical-menu-btn" onclick=""
            style="padding-right: 0; ">
            <i class="fa fa-fw fa-bars"></i>
          </button>

          <input type="hidden" id="modo_vertical_vista" value="2">
          <style>
            .clase_margin_menu:hover {
              background: #DCDCDC;
            }

            .clase_padding_vista_menu_1 {
              padding-top: 0.62rem;
              padding-right: 1.5rem;
              padding-bottom: 0.62rem;
              padding-left: 1.5rem;
            }
          </style>

          <!-- App Search-->

        </div>

        <div class="d-flex">

          <!--GUIA-->
          <div class="dropdown d-sm-inline-block pe-2">
            <li class="dropdown">
              <button class="dropdown-toggle  btn header-item noti-icon position-relative"
                style="color: #333;background: transparent;margin-top: 1px;padding-left: 1px;padding-right: 8px;display: flex;align-items: center;"
                onclick="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="#ff9c00"
                    d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82 6L12 12.72L5.18 9L12 5.28L18.82 9M17 16l-5 2.72L7 16v-3.73L12 15l5-2.73V16Z">
                  </path>
                </svg>
                <span class="co_tipografia_p oculto " style="text-transform: capitalize;">
                  <span class="text_btn_ocultar_header">
                    &nbsp;&nbsp;Tutoriales y Guías
                  </span>
                  <!--<span class="text_btn_mostrar_header oculto" style="display: none;">
&nbsp;&nbsp;Tutoriales y Gu&iacute;as
</span>    -->
                </span>
              </button>
            </li>
          </div>

          <!--CAMBIAR AREA-->


          <!--SUCURSAL-->
          <div class="dropdown d-sm-inline-block">
            <li class="dropdown">
              <button class="dropdown-toggle  btn header-item noti-icon position-relative" data-bs-toggle="modal"
                data-bs-target="#modal_session_sucursal"
                style="color: #333; background: transparent; margin-top: 0px; padding-left: 0; padding-right: 6px;">
                <i class="fa fa-home" style="color: #ff9c00; font-size: 17px;"></i>
                <span class="co_tipografia_p oculto " style="text-transform: capitalize;">
                  <span class="text_btn_ocultar_header">
                    Sucursal Principal</span>
                  <span class="text_btn_mostrar_header oculto" style="display: none;">
                    Sucursal P</span>
                </span>
              </button>
            </li>


          </div>

          <!--MENSAJERIA-->
          <div class="dropdown  d-sm-inline-block" style="padding-right: 7px;">
            <li class="dropdown">
              <button class="dropdown-toggle  btn header-item noti-icon position-relative" data-bs-toggle="dropdown"
                style="background: transparent; margin-top: 0px; padding-left: 0; padding-right: 0;"><img
                  src="./base_files/menu_Messag.png" style="width: 17px;"><span class="badge" id="badge_chat"
                  style="font-size: 10px; position: relative; bottom: 7px; right: 7px; padding: 2px 5px 2px 2px; background: red; color: rgb(255, 255, 255); display: none;">&nbsp;0</span>
                <b class="caret" style="color: #ff5900; display:none;"></b></button>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end" style="padding:0;">
                <script>
                  $('#badge_chat').html('&nbsp;0');
                  $('#badge_chat').css('display', 'none');
                </script>
                <li class="message-footer" style="padding: 0; margin: 0; text-align: center; background: #ff9c00;">
                  <a style="font-size: 12px;  color: white; margin: 0;"
                    href="https://produccion.negocia.pe/Operaciones/Mensajes.php">Ver todos los fcc_CA_contactos</a>
                </li>
              </ul>
            </li>
          </div>






          <div class="dropdown d-inline-block">

            <li class="dropdown">

              <button class="btn header-item noti-icon badge_notificaciones" onclick="fn_obtener_notificaciones();"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell" style="color: #ff5900;"></i>
                <!--<span class="badge" style="font-size: 8px;position: relative;bottom: 7px;right: 14px;padding: 2px;padding-right: 5px;background: red;color:#fff;top: -10px;border-radius: 50%;">&nbsp;&nbsp;</span>-->
              </button>

              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 badge_notificaciones"
                aria-labelledby="page-header-notifications-dropdown" style="max-height: 500px; overflow-y: auto;">

                <div style="background-color: #ff9c00; margin: 0; height: 40px; padding-top:8px;">
                  <span
                    style="margin-top: 0; padding-top: 11px; padding-left: 11px; color:white; padding-right: 17px; font-size:15px;"><b>Notificaciones</b></span>
                </div>

                <div class="fn_obtener_notificaciones" style="min-height: 300px;"></div>

              </ul>
              <script>
                function fn_obtener_notificaciones() {
                  if (!$('.badge_notificaciones').hasClass('show')) {
                    var data = new FormData();
                    data.append('fn_obtener_notificaciones', 1);
                    data.append('abrir_notificaciones', 0);
                    var array_deserializado = [1, "2", 2, "202", ["1", "2080-11-28", 0], ["2025-02-03 09:59:53"]];
                    data.append('notificaciones_array', JSON.stringify(array_deserializado));
                    devolver_ajax_2022([2, 'https://produccion.negocia.pe/functions/fn_notificaciones_sistema.php', data, '.fn_obtener_notificaciones', '', 5000, 0]);
                  }
                }

              </script>

            </li>
          </div>





          <!--USUARIO-->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item bg-soft-light border-start border-end"
              id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user"
                src="./base_files/2_1725636786_06092024103306_17256367866.jpeg" alt="Header Avatar">
              <span class="d-none d-xl-inline-block ms-1 fw-medium">Luis Felchoo</span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>

            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="https://produccion.negocia.pe/configuraciones/index.php?id=1"><i
                  class="fa fa-fw fa-gear font-size-16 align-middle me-1"></i>
                Datos de empresa</a>
              <a class="dropdown-item" href="https://produccion.negocia.pe/configuraciones/index.php?id=5"><i
                  class="fa fa-fw fa-user"></i>
                Usuarios
              </a>

              <li class="dropdown-item"><a href="https://produccion.negocia.pe/my-suscripcion.php"
                  style="font-size:12px; color: black;"><i class="fa fa-battery-4" style="color: green;"></i> Paga tu
                  suscripción</a>
                <div style="text-align: center; margin-bottom: 5px;">
                  <span class="label bg-success"
                    style="font-weight: normal; font-size: 7pt; color:white;padding: 2px; border-radius: 2px;">Vence:
                    28/11/2080</span>
                </div>
              </li>
              <a class="dropdown-item" href="javascript: void(0);" id="mode-setting-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-moon icon-lg layout-mode-dark">
                  <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-sun icon-lg layout-mode-light">
                  <circle cx="12" cy="12" r="5"></circle>
                  <line x1="12" y1="1" x2="12" y2="3"></line>
                  <line x1="12" y1="21" x2="12" y2="23"></line>
                  <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                  <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                  <line x1="1" y1="12" x2="3" y2="12"></line>
                  <line x1="21" y1="12" x2="23" y2="12"></line>
                  <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                  <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>Tema oscuro
              </a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://produccion.negocia.pe/Operaciones/ajax/cerrar_sesion.php"><i
                  class="mdi mdi-logout font-size-16 align-middle me-1"></i> Cerrar Sesión</a>
            </div>
          </div>

        </div>
      </div>
    </header>

    <div class="vertical-menu">
      <div data-simplebar="init" class="h-100">
        <div class="simplebar-wrapper" style="margin: 0px;">
          <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
          </div>
          <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: -8px; bottom: 0px;">
              <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                <div class="simplebar-content" style="padding: 0px;">
                  <div id="sidebar-menu" style="padding-top:0;">

                    <ul class="metismenu list-unstyled" id="side-menu">
                      <!--INICIO-->
                      <li>
                        <a href="https://produccion.negocia.pe/Inicio.php" class="clase_margin_menu">
                          <i class="bx bx-home" height="16" width="16"></i>
                          <span data-key="t-inicio">Inicio</span>
                        </a>
                      </li>

                      <!--Ventas e ingresos-->
                      <li id="guia_popup7">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-log-in-circle" height="16" width="16"></i>
                          <span>Ventas e Ingresos</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a id="click_venta" class="tipo_class_header" onclick=""><i
                                style="color: orange; font-size: 17px;" class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php"
                              style="padding-right: 0px;position: relative;">
                              <span data-key="t-calendar">Ventas </span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?ventas_recurrentes=1">
                              <span data-key="t-calendar">Ventas Recurrentes</span>

                              <!--<span class="badge" style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>-->
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?ventas_recurrentes=2">
                              <span data-key="t-calendar">Ingresos Recurrentes</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?ventas_anticipadas">
                              <span data-key="t-calendar">Ventas Anticipadas</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?fn_facturacion_electronica">
                              <span data-key="t-calendar">Gestión de Comprobantes</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/cuentas.php?id=3">
                              <span data-key="t-chat">Cobros a clientes</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/view_v2.php?id=2060451720709"
                              style="padding-right: 0px;">
                              <span data-key="t-email">Otro ingreso</span>
                            </a>
                          </li>

                          <li>
                            <a id="click_nc_credito" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?notas_credito"
                              style="padding-right: 0px;">
                              <span data-key="t-invoices">Notas de Crédito Clientes</span>
                            </a>

                          </li>

                          <li>
                            <a id="click_nc_debito" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?notas_debito"
                              style="padding-right: 0px;">
                              <span data-key="t-contacts">Notas de Débito Clientes</span>
                            </a>
                          </li>
                          <!--cotizaciones-->
                          <li>
                            <a id="click_cotizacion" class="tipo_class_header" onclick=""
                              style="float:right;display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Operaciones.php?id=1"
                              style="padding-right: 0px;">
                              <span data-key="t-contacts">Cotizaciones</span>
                            </a>
                          </li>
                          <!--Ordenes de venta-->
                          <li>
                            <a id="click_ord_pedido" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Operaciones.php?id=2"
                              style="padding-right: 0px;">
                              <span data-key="t-contacts">Órdenes de Pedido</span>
                            </a>
                          </li>
                          <!--Puntos-->
                          <li>
                            <a id="click_puntos" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Puntos.php" style="padding-right: 0px;">
                              <span data-key="t-contacts">Puntos</span>
                            </a>
                          </li>
                          <!--VALES DE CONSUMO-->
                          <li class="">
                            <a href="https://produccion.negocia.pe/vales_consumo.php" style="padding-right: 0px;">
                              <span data-key="t-contacts">Vales de Consúmo</span>
                            </a>
                          </li>

                        </ul>
                      </li>

                      <!--Compras y gastos-->
                      <li id="guia_popup8">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-log-out-circle" height="16" width="16"></i>
                          <span>Compras y Gastos</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a id="click_cp_proveedores" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Gastos.php?compras=1"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Compras a Proveedores</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Gastos.php?compras_recurrentes=1">
                              <span data-key="t-calendar">Compras Recurrentes</span><span class="badge"
                                style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>
                            </a>
                          </li>
                          <li>
                            <a
                              href="https://produccion.negocia.pe/Operaciones/Gastos.php?otro_gasto=1&amp;compras_recurrentes=2">
                              <span data-key="t-calendar">Gastos Recurrentes</span><span class="badge"
                                style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_ot_gastos" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Gastos.php?otro_gasto=1"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Otros Gastos</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/cuentas.php?id=4" style="padding-right: 0px;">
                              <span data-key="t-calendar">Pagos a Proveedores</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_or_compra" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/orden_compra_servicio.php?m=1"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Órdenes de compra</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_or_compra" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/orden_compra_servicio.php?m=2"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Órdenes de Servicio</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Nueva_Nota_de_Credito.php?tipo_ope=2"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Notas de Crédito Compra</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <!--Registros-->
                      <li id="guia_popup9">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-file" height="16" width="16"></i>
                          <span>Registros</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              Productos y Servicios
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li>
                                <a href="https://produccion.negocia.pe/Registros/Productos.php">
                                  <span data-key="t-calendar">Ir a mis productos</span>
                                </a>
                              </li>
                              <li>
                                <a
                                  href="https://produccion.negocia.pe/functions/fn_categoria_complementos.php?view_controller=3">
                                  <span data-key="t-calendar">Complementos</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Registros/Productos.php?item_delete">
                                  <span data-key="t-calendar">Productos Desactivados</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Registros/categoria.php">
                                  <span data-key="t-calendar">Categoría y marcas</span>
                                </a>
                              </li>

                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/historial_precios.php">
                                  <span data-key="t-historial-de-precios">Historial de precios</span>
                                </a>
                              </li>

                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/historial_tipo_cambio.php">
                                  <span data-key="t-historial-tipo-cambio">Historial Tipo Cambio</span>
                                  <span class="badge"
                                    style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">Nuevo</span>
                                </a>
                              </li>


                            </ul>
                          </li>



                          <li>
                            <a id="click_lt_precio" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/lista_precio.php" style="padding-right: 0px;">
                              <span data-key="t-calendar">Lista de Precios</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/registros.php?id=1" style="padding-right:0px;">
                              <span data-key="t-calendar">Clientes</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/registros.php?id=2" style="padding-right:0px;">
                              <span data-key="t-calendar">Proveedores</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/registros.php?id=3" style="padding-right:0px;">
                              <span data-key="t-calendar">Colaboradores</span>
                            </a>
                          </li>


                        </ul>
                      </li>

                      <!--INVENTARIOS-->
                      <li id="guia_popup10">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-package" height="16" width="16"></i>
                          <span>Inventarios</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=1">
                              <span data-key="t-contacts">Inventario Valorizado</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_mt_inventario" class="tipo_class_header" onclick=""
                              style="float:right; display: block;">
                              <i style="color: orange; font-size: 17px;" class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/inventario.php?id=2" style="padding-right: 0px;">
                              <span data-key="t-contacts">Movimientos de Inventario</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=2&amp;merma"
                              style="padding-right: 0px;">
                              <span data-key="t-contacts">Mermas</span>
                            </a>
                          </li>


                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/movimiento_masivos.php">
                              <span data-key="t-contacts">Ingreso de Inventario Masivo</span>
                            </a>
                          </li>
                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              <span data-key="t-calendar">Transferencia entre sucursales</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li><a
                                  href="https://produccion.negocia.pe/Operaciones/Nueva-Transferencia-entre-Almacenes.php"
                                  data-key="t-invoice-list">De la misma empresa</a></li>
                              <li><a
                                  href="https://produccion.negocia.pe/Operaciones/Nueva-Transferencia-entre-Almacenes.php?out"
                                  data-key="t-invoice-detail">A otras empresas</a></li>
                              <li><a href="https://produccion.negocia.pe/Operaciones/Transferencias-Almacenes.php"
                                  data-key="t-invoice-detail">Ver todas las transferencias</a></li>
                            </ul>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?despacho">
                              <span data-key="t-contacts">Ventas por despachar</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=1&amp;stock_minimo">
                              <span data-key="t-contacts">Productos por Caducar</span>
                            </a>
                          </li>

                          <li>
                            <a id="click_guia_remision" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Guias_remision.php"
                              style="padding-right: 0px;">
                              <span data-key="t-contacts">Guias de remisión</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=1&amp;lotes=1">
                              <span data-key="t-contacts">Lotes</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=1&amp;lotes=1&amp;vencimiento=1">
                              <span data-key="t-contacts">Lotes Vencidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/POS/POS_renew.php?countv=999999&amp;excel=1"
                              target="_blank">
                              <span data-key="t-contacts">Realizar Conteo de Inventario</span>
                            </a>
                          </li>

                        </ul>
                      </li>

                      <!--ORDENES DE PRODUCCION-->
                      <li id="guia_popup11">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-archive" height="16" width="16"></i>
                          <span>Producción</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a id="click_rt_produccion_uno" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Ordenes-de-Produccion.php"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Ordenes de Producción</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_rt_produccion_dos" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/Operaciones/Ordenes-de-Produccion.php?equipos"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Equipos de Producción</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <!--PUNTO DE VENTA-->
                      <li id="guia_popup12">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-store" height="16" width="16"></i>
                          <span>Punto de Venta</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="https://produccion.negocia.pe/POS/index.php" target="_blank"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Ir a ventas</span><span style="float:right"><i
                                  style="color: orange; font-size: 17px;" class="mdi-arrow-top-right-thin"></i></span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/POS/index.php?orden_pedido=1" target="_blank">
                              <span data-key="t-calendario">Ordenar pedidos</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/POS/POS_renew.php?countv=333&amp;cotizar=1"
                              target="_blank">
                              <span data-key="t-calendario">Cotización</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/POS/POS_renew.php?id=4">
                              <span data-key="t-calendar">Turnos</span>
                            </a>
                          </li>

                          <li style="display:none;">
                            <a href="https://produccion.negocia.pe/offline/exportar/?id=1">
                              <span data-key="t-calendar">POS Offline&nbsp;&nbsp;</span><span class="badge"
                                style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>
                            </a>
                          </li>

                        </ul>
                      </li>



                      <li>
                        <a href="https://produccion.negocia.pe/Inicio_ecommerce.php?&amp;menu_ec"
                          class="clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-cart" height="16" width="16"></i>
                          <span class="badge_5"
                            style="left: -17px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;top: -10px;padding-left: 4px;padding-right: 4px;">
                            0</span><span style="left: -20px;margin-left: -15px;">E-commerce</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://produccion.negocia.pe/crm/?menu_crm" class="clase_margin_menu"
                          aria-expanded="false" id="crm_6">
                          <i class=" bx bx-user-pin" height="16" width="16"></i>
                          <span>CRM</span>
                        </a>
                      </li>



                      <!--REPORTES-->
                      <li id="">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-send" height="16" width="16"></i>
                          <span>E-mailing</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">

                          <li>
                            <a href="https://produccion.negocia.pe/email/?type=1">
                              <span data-key="t-calendar">Enviados</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/email/?type=2">
                              <span data-key="t-calendar">Recibidos</span>
                            </a>
                          </li>

                          <li>
                            <a
                              href="https://produccion.negocia.pe/configuraciones/otras_configuraciones_index.php?direct=7&amp;id_sub=36">
                              <span data-key="t-calendar">Configuraciones</span>
                            </a>
                          </li>

                        </ul>
                      </li>


                      <!--REPORTES-->
                      <li id="guia_popup13">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-bar-chart-alt-2" height="16" width="16"></i>
                          <span>Reportes</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php">
                              <span data-key="t-calendar">Ventas e ingresos</span>
                            </a>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/Gastos.php">
                              <span data-key="t-calendar">Compras y Gastos</span>
                            </a>
                          </li>

                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              <span data-key="t-calendar">Impuestos</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/Ingresos.php?impuestos">
                                  <span data-key="t-calendar">Impuestos Ventas</span><span class="badge"
                                    style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/Gastos.php?impuestos_compras">
                                  <span data-key="t-calendar">Impuestos Compras</span><span class="badge"
                                    style="font-size: 10px; font-size: 10px; padding: 2px; background: #FF9C00; position: relative; bottom: 5px; font-weight: normal;">&nbsp;Nuevo&nbsp;</span>
                                </a>
                              </li>
                            </ul>
                          </li>


                          <li>
                            <a href="https://produccion.negocia.pe/inventario.php?id=1">
                              <span data-key="t-calendar">Inventario Valorizado</span>
                            </a>
                          </li>
                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              <span data-key="t-calendar">Cobros</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">

                              <li>
                                <a href="https://produccion.negocia.pe/cuentas.php?id=3">
                                  <span data-key="t-calendar">Cobros Pendientes</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/cuentas.php?id=1">
                                  <span data-key="t-calendar">Cobros Realizados</span>
                                </a>
                              </li>

                            </ul>
                          </li>

                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              <span data-key="t-calendar">Pagos</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li>
                                <a href="https://produccion.negocia.pe/cuentas.php?id=4">
                                  <span data-key="t-calendar">Pagos Pendientes</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/cuentas.php?id=2">
                                  <span data-key="t-calendar">Pagos Realizados</span>
                                </a>
                              </li>
                            </ul>
                          </li>

                          <li>
                            <a href="https://produccion.negocia.pe/flujo_caja.php">
                              <span data-key="t-calendar">Flujo de Caja</span>
                            </a>
                          </li>


                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                              <span data-key="t-calendar">Caja y bancos</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li>
                                <a href="https://produccion.negocia.pe/bancos.php?id=1">
                                  <span data-key="t-calendar">Movimientos Bancarios</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/bancos.php?id=2">
                                  <span data-key="t-calendar">Transferencia entre cuentas</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/cuentas.php?id=5">
                                  <span data-key="t-calendar">Cobros y Pagos</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/POS/POS_renew.php?id=3">
                                  <span data-key="t-calendar">Detalle Caja</span>
                                </a>
                              </li>


                            </ul>

                          </li>

                        </ul>
                      </li>

                      <!--Contabilidad-->
                      <li>
                        <a href="javascript:void(0);" class="clase_margin_menu has-arrow" aria-expanded="false">
                          <i class="bx bx-layer" height="16" width="16"></i>
                          <span data-key="t-facturacion">Contabilidad</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="https://produccion.negocia.pe/contabilidad/?codLibro=140000">
                              <span data-key="t-calendar">Registro de Ventas Electrónico</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/contabilidad/?codLibro=080000">
                              <span data-key="t-calendar">Registro de Compras Electrónico</span>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <!--Facturacion-->
                      <li id="guia_popup14">
                        <a href="javascript:void(0);" class="clase_margin_menu has-arrow" aria-expanded="false">
                          <i class="bx bx-layer" height="16" width="16"></i>
                          <span data-key="t-facturacion">Facturación</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="https://produccion.negocia.pe/facturacion_inicial.php">
                              <span data-key="t-calendar">Activación de Facturación</span>
                            </a>
                          </li>
                          <!--
<li>
<a href="https://produccion.negocia.pe/resumen.php">
<span data-key="t-calendar">Resumenes de boletas</span>
</a>
</li>-->

                        </ul>

                      </li>

                      <!--Configuraciones-->
                      <li id="guia_popup15">
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-cog" height="16" width="16"></i>
                          <span>Configuraciones</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">Datos de empresa</a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">
                              <li>
                                <a href="https://produccion.negocia.pe/configuraciones/index.php?id=1">
                                  <span data-key="t-calendar">Datos Generales</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/configuraciones/index.php?id=3">
                                  <span data-key="t-calendar">Cuentas Bancarias</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/configuraciones/index.php?id=3&amp;delete">
                                  <span data-key="t-calendar">Cuentas Bancarias Desactivadas</span>
                                </a>
                              </li>

                              <li>
                                <a href="javascript: void(0);" class="has-arrow" aria-expanded="false">
                                  <span data-key="t-calendar">Almacenes</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                  <li>
                                    <a href="https://produccion.negocia.pe/Operaciones/almacenes.php"
                                      style="margin-left: 20px;">
                                      Almacenes
                                    </a>
                                  </li>
                                  <li>
                                    <a href="https://produccion.negocia.pe/Operaciones/almacenes.php?mv=1"
                                      style="margin-left: 20px;">
                                      <span data-key="t-calendar">Asignar Almacenes&nbsp;&nbsp;</span>
                                      <span class="badge"
                                        style="font-size: 10px;font-size: 10px;padding: 2px;background: #FF9C00;position: relative;bottom: 5px;font-weight: normal;position: absolute;right: 15px;bottom: 20px;">&nbsp;Nuevo&nbsp;</span>
                                    </a>
                                  </li>
                                </ul>
                              </li>

                              <li>
                                <a id="click_sucrusal" class="tipo_class_header" onclick=""
                                  style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                    class="bx bx-plus-circle"></i></a>
                                <a href="https://produccion.negocia.pe/configuraciones/index.php?id=4"
                                  style="padding-right: 0px;">
                                  <span data-key="t-calendar">Sucursales</span>
                                </a>
                              </li>


                            </ul>
                          </li>
                          <li class="d-none">
                            <a href="https://produccion.negocia.pe/configuraciones/index.php?id=2">
                              <span data-key="t-calendar">Facturación Electrónica</span>
                            </a>
                          </li>
                          <li>
                            <a id="click_usuario" class="tipo_class_header" onclick=""
                              style="float:right; display: block;"><i style="color: orange; font-size: 17px;"
                                class="bx bx-plus-circle"></i></a>
                            <a href="https://produccion.negocia.pe/configuraciones/index.php?id=5"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Usuarios</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/my-suscripcion.php">
                              <span data-key="t-calendar">Pagar mi Suscripción</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/activity_log.php">
                              <span data-key="t-calendar">Registro de Actividad</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/configuraciones/otras_configuraciones_pruebas.php">
                              <span data-key="t-calendar">Otras Configuraciones</span>
                            </a>
                          </li>




                        </ul>
                      </li>

                      <li>
                        <hr>
                      </li>
                      <li>
                        <a href="https://aprendizaje.negocia.lat/negocia-erp" target="_blank" class="clase_margin_menu">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="height: 22px; width: 22px; margin-right: 5px !important;">
                            <path fill="#545a6d"
                              d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82 6L12 12.72L5.18 9L12 5.28L18.82 9M17 16l-5 2.72L7 16v-3.73L12 15l5-2.73V16Z">
                            </path>
                          </svg>
                          <span data-key="t-calendar">Tutoriales y Guías</span>
                        </a>
                      </li>


                      <li>
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-cog" height="16" width="16"></i>
                          <span>Planes</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                          <li>
                            <a href="https://produccion.negocia.pe/Operaciones/admin_planes.php">
                              <span data-key="t-calendar">Administrar Planes</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/my-suscripcion.php" style="padding-right: 0px;">
                              <span data-key="t-calendar">My suscripcion</span>
                            </a>
                          </li>
                          <li>
                            <a href="https://produccion.negocia.pe/my-suscripcion.php?pagar=3"
                              style="padding-right: 0px;">
                              <span data-key="t-calendar">Pagar suscripcion</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <hr>
                      </li>
                      <li>
                        <a href="https://produccion.negocia.pe/Operaciones/negoci_Empresas.php"
                          class="clase_margin_menu">
                          <i class="bx bx-cog" height="16" width="16"></i>
                          <span data-key="t-calendar">Empresas / Clientes</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://produccion.negocia.pe/Operaciones/negocia_facturacion_mantenimiento.php"
                          class="clase_margin_menu">
                          <i class="bx bx-cog" height="16" width="16"></i>
                          <span data-key="t-calendar">Facturación Mantenimiento</span>
                        </a>
                      </li>

                      <li>
                        <hr>
                      </li>
                      <!--Configuraciones-->
                      <li>
                        <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                          <i class="bx bx-user" height="16" width="16"></i>
                          <span>Embajadores</span>
                        </a>
                        <ul class="sub-menu mm-collapse" aria-expanded="false">

                          <li>
                            <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                              <i class="bx bx-user" height="16" width="16"></i>
                              <span>Lista de Embajadores</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">

                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/indicadores_embajadores.php?s=1">
                                  <span data-key="t-calendar">Negocia</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/indicadores_embajadores.php?s=3">
                                  <span data-key="t-calendar">Negocia Shop</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/indicadores_embajadores.php?s=2">
                                  <span data-key="t-calendar">Negocia CRM</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/Operaciones/indicadores_embajadores.php">
                                  <span data-key="t-calendar">Ver Todos</span>
                                </a>
                              </li>
                            </ul>
                          </li>

                          <li>
                            <a href="javascript: void(0);" class="has-arrow clase_margin_menu" aria-expanded="false">
                              <i class="bx bx-user" height="16" width="16"></i>
                              <span>Lista de Referidos</span>
                            </a>
                            <ul class="sub-menu mm-collapse" aria-expanded="false">

                              <li>
                                <a href="https://produccion.negocia.pe/embajadores/?m=3&amp;sm=3&amp;tpe=1">
                                  <span data-key="t-calendar">Negocia</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/embajadores/?m=3&amp;sm=3&amp;tpe=3">
                                  <span data-key="t-calendar">Negocia Shop</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/embajadores/?m=3&amp;sm=3&amp;tpe=2">
                                  <span data-key="t-calendar">Negocia CRM</span>
                                </a>
                              </li>
                              <li>
                                <a href="https://produccion.negocia.pe/embajadores/?m=3&amp;sm=3">
                                  <span data-key="t-calendar">Ver Todos</span>
                                </a>
                              </li>
                            </ul>
                          </li>

                          <li>
                            <a class="pointer_menu_a"
                              href="https://produccion.negocia.pe/embajadores/servicios.php?id=1">
                              <i class="fas fa-percent" height="16" width="16" style="
font-size: 16px;
"></i>
                              <span>Servicios</span>
                            </a>
                          </li>

                        </ul>
                      </li>


                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="simplebar-placeholder" style="width: auto; height: 910px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
          <div class="simplebar-scrollbar" style="width: 64px; transform: translate3d(0px, 0px, 0px); display: none;">
          </div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
          <div class="simplebar-scrollbar"
            style="height: 856px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
      </div>
      <div class="navbar-brand-box d-none" style="padding: 0.5rem 1.3rem;">
        <a href="https://negocialite.com/centro-de-aprendizaje" class="logo logo-dark"
          style="position: fixed;bottom: 0;/* background-color: #333; */color: #fff;/* padding: 10px; *//* text-align: center; */">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#545a6d"
              d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82 6L12 12.72L5.18 9L12 5.28L18.82 9M17 16l-5 2.72L7 16v-3.73L12 15l5-2.73V16Z">
            </path>
          </svg>
          <span class="logo-lg">
            <span>&nbsp;Tutoriales y Guías</span>
          </span>
        </a>
      </div>
    </div>

    <!--###################################################################################################################--->

















    <!-- MODAL USERS -->
    <div class="right_modal modal fade show" id="fcclientes-modal" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog fcclientes-modal-dialog" role="document">
        <div class="modal-content">


          <div class="modal-header">
            <p>Editar cliente</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


          <div class="modal-body " style="padding: 5px 5px 5px;">


            

            <div id="fcRegistro_loadingSpinner" class="fcRegistro_loadingSpinner d-none">
              <div class="fcRegistro_container_shimmer">

              <button class="fcRegistro_btn_shimer"></button>
              <button class="fcRegistro_btn_shimer"></button>
              </div>
              <div class="fcRegistro_from_shimmer">
              <label class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer" type="text">
              <label class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer" type="text">
              <label class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer"type="text">
              <label class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer" type="text">
              <!-- <label  class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer" type="text">
              <label class="fcRegistro_label_shimmer" for=""></label>
              <input class="fcRegistro_input_shimmer" type="text"> -->
              </div>


            </div>




            <div class="d-flex justify-content-end" id="fcRegistro_formulario">


            </div>

          </div>


        </div>
      </div>
    </div>
  </div>


  <script src="./js.js"></script>






<div class="dropdown" style="float: right; margin-top: 50px; margin-right: 10px;">
  <button
    class="btn dropdown-toggle d-flex align-items-center justify-content-center"
    type="button"
    id="dropdownMenuButton2"
    data-bs-toggle="dropdown"
    aria-expanded="false"
    style="background: #fff; color: red; padding: 5px 10px;">
    <!-- Ícono “+” en rojo -->
    <i class="dripicons-plus" 
       aria-hidden="true" 
       style="font-size: 22px;">
    </i>
  </button>

  <!-- Menú desplegable -->
  <!-- Usamos 'dropdown-menu-end' para que se alinee junto al botón (a la izquierda del botón si está flotado a la derecha) -->
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2" style="min-width: 160px;">
    <li>
      <a class="dropdown-item d-flex align-items-center" 
         href="javascript:void(0);" 
         onclick="fcc_abrirModalPersona()">
         <!-- Ícono de usuario -->
         <i class="dripicons-user" style="font-size:18px;"></i>
         <span class="ms-2">Persona</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item d-flex align-items-center" 
         href="javascript:void(0);" 
         onclick="fcc_abrirModalEmpresa()">
         <!-- Ícono de edificio -->
         <i class="dripicons-user" style="font-size:18px;"></i>
         <span class="ms-2">Empresa</span>
      </a>
    </li>
  </ul>
</div>



  <!-- <button type="button" onclick="$('#fcclientes-modal').modal('show');fcc_obtener_data_ws(0);"
    style="float: right; margin-top: 50px; margin-right: 10px;">Abrir Modal</button>
 -->

  <!--   -->
<!-- BOTÓN PRINCIPAL + ÍCONO “+” + DROPDOWN -->





  <button type="button" onclick="$('#fcclientes-modal').modal('show'); fcc_obtener_data_ws(139003);"
    style="float: right; margin-top: 50px; margin-right: 10px;">Editar</button>


















  <!--###################################################################################################################--->

  <link rel="stylesheet" href="./base_files/jquery-ui.css">
  <script src="./base_files/jquery-ui.min.js.descarga"> </script>

  <!-- apexcharts js -->
  <script src="./base_files/apexcharts.min.js.descarga"></script>

  <script src="./base_files/bootstrap.bundle.min.js.descarga"></script>
  <script src="./base_files/metisMenu.min.js.descarga"></script>
  <script src="./base_files/simplebar.min(1).js.descarga"></script>
  <script src="./base_files/waves.min.js.descarga"></script>
  <script src="./base_files/feather.min.js.descarga"></script>
  <script src="./base_files/pace.min.js.descarga"></script>
  <script src="./base_files/app.js.descarga"></script>
  <script src="./base_files/waves.min(1).js.descarga"></script>

  <!--FULLCALENDAR -->
  <link rel="stylesheet" type="text/css" href="./base_files/fullcalendar.min.css">
  <script type="text/javascript" src="./base_files/moment.min.js.descarga"></script>
  <script type="text/javascript" src="./base_files/fullcalendar.min.js.descarga"></script>
  <script type="text/javascript" src="./base_files/es.js.descarga"></script>


  <!--EMOJI PICKER-->
  <link href="./base_files/emoji.css" rel="stylesheet">
  <script src="./base_files/config.js.descarga"></script>
  <script src="./base_files/util.js.descarga"></script>
  <script src="./base_files/jquery.emojiarea.js.descarga"></script>
  <script src="./base_files/emoji-picker.js.descarga"></script>

  <!-- JavaScript Libraries -->
  <!--<script src="https://produccion.negocia.pe/code.jquery.com/jquery-3.4.1.min.js"></script>-->

  <script src="./base_files/easing.min.js.descarga"></script>
  <script src="./base_files/owl.carousel.min.js.descarga"></script>
  <script src="./base_files/isotope.pkgd.min.js.descarga"></script>
  <script src="./base_files/lightbox.min.js.descarga"></script>

  <!-- Template Javascript -->
  <script src="./base_files/main.js.descarga"></script>





</body>




</html>