  <form name="emotes" method="post" action="index.php?editor=npc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=75">
    <div class="edit_form" style="width: 510px;">
      <div class="edit_form_header">
        Edit Emote <?=$id?>
<?$oldemote = $emoteid;?>
      </div>
      <div class="edit_form_content">
        <center>
          <strong>EmoteID</strong><br>
          <input class="indented" id="id" type="text" name="emoteid" size="7" value="<?=$emoteid?>"><br><br>
          <strong>Event</strong><br>
          <select name="event_" style="width: 150px;">
<?foreach($eventtype as $key=>$value):?>
            <option value="<?=$key?>"<?echo ($key == $event_)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
          </select><br><br>
          <strong>Type</strong><br>
          <select name="type" style="width: 100px;">
<?foreach($emotetype as $key=>$value):?>
            <option value="<?=$key?>"<?echo ($key == $type)? " selected" : "";?>><?=$key?>: <?=$value?></option>
<?endforeach;?>
          </select><br><br>
          <strong>Emote</strong><br>
        </center>
        <td><textarea name="text" rows=6 cols=58><?=$text?></textarea></td><br><br>
        <center>
          <input type="hidden" name="id" value="<?=$id?>">
          <input type="hidden" name="oldemote" value="<?=$oldemote?>">
          <input type="submit" value="Submit Changes">
        </center>
      </div>
    </div>
  </form>