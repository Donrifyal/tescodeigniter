<h2><?php echo $title; ?></h2>

<?php foreach ($bio as $bio_item): ?>

        
        <div class="main">
                <?php echo "Nama: "?><?php echo $bio_item['nama']; ?><br>
                <?php echo "NIM: "?><?php echo $bio_item['nim']; ?><br>
                <?php echo "Tahun lahir: "?><?php echo $bio_item['tahun_lahir']; ?><br>
                <?php echo "Tempat tinggal: "?><?php echo $bio_item['tempat_tinggal']; ?><br>
                <?php echo "Hobby: "?><?php echo $bio_item['hobby']; ?>
        </div>

<?php endforeach; ?>