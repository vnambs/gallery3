<?php defined("SYSPATH") or die("No direct script access.") ?>
<script>
  var FATAL_ERROR = "<?= t("Fatal Error") ?>";
  var FILE_IMPORT_WARNING = "<?= t("Add from server warning") ?>";
  $("#gServerAdd").ready(function() {
    init_server_add_form();
  });
</script>
<div id="gServerAdd">
  <h1 style="display: none;"><?= t("Add Photos to '%title'", array("title" => p::clean($album_title))) ?></h1>

  <p id="gDescription"><?= t("Photos will be added to album:") ?></p>
  <ul class="gBreadcrumbs">
    <? foreach ($parents as $parent): ?>
    <li><?= p::clean($parent->title) ?></li>
    <? endforeach ?>
    <li class="active"><?= p::clean($album_title) ?></li>
  </ul>

  <?= form::open($action, array("method" => "post")) ?>
  <div id="gServerAddTree" >
    <?= $tree ?>
  </div>
  <span>
    <?= form::submit(array("id" => "gServerPauseButton", "name" => "add", "disabled" => true, "class" => "submit", "style" => "display:none"), t("Pause")) ?>
    <?= form::submit(array("id" => "gServerAddButton", "name" => "add", "disabled" => true, "class" => "submit"), t("Add")) ?>
  </span>
  <?= form::close() ?>
  <div class="gProgressBar" style="visibility: hidden" ></div>
</div>
