<?php

echo '<h2>'.$Poster_item['Title'].'</h2>';
echo '<h2>'.$Poster_item['PFirst'].'</h2>';
echo '<h2>'.$Poster_item['PosterID'].'</h2>';
?>
<?php echo form_open('JudgingApp/view/1'); ?>

<?php
echo form_open();
echo form_radio('criteria1', '1'). " 1";
echo form_radio('Criteria1', '2'). " 2";
echo form_radio('Criteria1', '3'). " 3";
echo form_radio('Criteria1', '4'). " 4";
?>
<br>

<?php
echo form_radio('criteria2', '1'). " 1";
echo form_radio('Criteria2', '2'). " 2";
echo form_radio('Criteria2', '3'). " 3";
echo form_radio('Criteria2', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria3', '1'). " 1";
echo form_radio('Criteria3', '2'). " 2";
echo form_radio('Criteria3', '3'). " 3";
echo form_radio('Criteria3', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria4', '1'). " 1";
echo form_radio('Criteria4', '2'). " 2";
echo form_radio('Criteria4', '3'). " 3";
echo form_radio('Criteria4', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria5', '1'). " 1";
echo form_radio('Criteria5', '2'). " 2";
echo form_radio('Criteria5', '3'). " 3";
echo form_radio('Criteria5', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria6', '1'). " 1";
echo form_radio('Criteria6', '2'). " 2";
echo form_radio('Criteria6', '3'). " 3";
echo form_radio('Criteria6', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria7', '1'). " 1";
echo form_radio('Criteria7', '2'). " 2";
echo form_radio('Criteria7', '3'). " 3";
echo form_radio('Criteria7', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria8', '1'). " 1";
echo form_radio('Criteria8', '2'). " 2";
echo form_radio('Criteria8', '3'). " 3";
echo form_radio('Criteria8', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria9', '1'). " 1";
echo form_radio('Criteria9', '2'). " 2";
echo form_radio('Criteria9', '3'). " 3";
echo form_radio('Criteria9', '4'). " 4";
?>
<br>
<?php
echo form_radio('criteria10', '1'). " 1";
echo form_radio('Criteria10', '2'). " 2";
echo form_radio('Criteria10', '3'). " 3";
echo form_radio('Criteria10', '4'). " 4";
?>
<br>
<label for="Comments">Comments</label>
<textarea name="Comments"></textarea><br />

<input type="submit" name="submit" value="submit" />
