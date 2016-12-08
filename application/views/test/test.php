<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr>
      <td>ID</td>
      <td>Date</td>
      <td>Link</td>
      <td>Title</td>
      <td>Excerpt</td>
      <td>Featured Media</td>
    </tr>
    <?php foreach ($mahasiswa as $m){ ?>
    <tr>
      <td><?php echo $m->id; ?></td>
      <td><?php echo date("m/d/Y", strtotime($m->date)); ?></td>
      <td><?php echo $m->link; ?></td>
      <td><?php echo $m->title->rendered; ?></td>
      <td><?php echo $m->excerpt->rendered; ?></td>
      <td><img src="<?php echo $m->better_featured_image->media_details->sizes->medium->source_url; ?>"></td>
    </tr>
    <?php }?>
</table>