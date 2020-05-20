
<?php //application/views/pics/index.php 

$this->load->view($this->config->item('theme') . 'header');

?>

<h2><?php echo $title; ?></h2>

<?php foreach ($pics as $pics_item): ?>

        <h3><?php echo $pics_item['title']; ?></h3>
        <div class="main">
                <?php echo $pics_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('pics/'.$pics_item['slug']); ?>">View pics</a></p>

<?php endforeach;
$this->load->view($this->config->item('theme') . 'footer');
?>