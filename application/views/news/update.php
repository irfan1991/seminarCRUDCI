<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>

<label for="title">Judul</label>
<input type="text" name="title" value='<?php echo $news_item['title']; ?>'><br>

<label for="text">Text</label><br>
<textarea name="text" rows="8" cols="40" ><?php echo $news_item['text']; ?></textarea> <br>

<input type="submit" name="submit" value="kirim">

<?php echo form_close(); ?>