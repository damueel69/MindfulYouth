
<style>
  .right-align {
    text-align: right; /* Aligns the content to the right within the <td> */
  }
  .left-align {
    text-align: left; /* Aligns the content to the right within the <td> */
}
.smaller-file-input {
    /* Define your styles to reduce the size of the file input */
    width: 250px; /* Set the desired width */
    /* You can also adjust other properties like height, font-size, etc. */
}

.right-aligned {
    float: right; /* Aligns the element to the right */
    /* Additional styles if needed */
}


</style>
<h1>Chatting App</h1>

<table border="1">
  <tr>
    <!-- td 1 -->
    <td>
      <div id="chat_viewport">
  
      </div>
    </td>
    <!-- End of td 1 -->
    
    <!-- td 2  -->
    
    <!-- End of td 2 -->

  </tr>
  <tr>
    <!-- td 1 -->
    <td>
    <div class="right-align">
        <?php
        echo form_open_multipart('chat/index/'.$this->uri->segment(3));

        
      ?>
            <input type="file" name="userfile" class="form-control smaller-file-input right-aligned" />

      <input type="submit" name="submit" value="Upload" class="btn btn-success btn-sm" />
      
      <?php echo form_close(); ?>
        </div>
      <div class="left-align" id="chat_input">
        <!-- <input type="text" name="chat_message" id="chat_message" value="" tabindex="1" /> -->
        <input type="text" name="chat_message" id="chat_message" />
        <?php echo anchor('#', 'Enter', array('title' => 'Send this chat message', 'id' => 'submit_message', 'class' => 'btn btn-default btn-sm')); ?>
        <div class="clearer"></div>
        
      </div>
      
    </td>
    <!-- end of td 1 -->
    <td>
    
    </td>
  </tr>
</table>
<a href="<?= base_url('index.php/dashboard') ?>" class="btn btn-info">Kembali</a>

