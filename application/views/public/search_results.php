<?php include('public_header.php'); ?>
    <div class="container">
        <h1>Search Results</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <td>Sr no.</td>
                    <td>Article Tile</td>
                    <td>Publiched on</td>
                </tr>
            </thead>
            <tbody>
               <tr>
                   <?php if(count($articles)):?>
                   <?php $count = $this->uri->segment(3);?>
                   <?php foreach($articles as $article): ?>
                    <td><?php echo ++$count ?></td>
                    <td><?php echo $article->title ?></td>
                    <td><?php echo "Date" ?></td>
                </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                            <td colspan="3">No results found.</td>
                    </tr>
                        <?php endif; ?>
            </tbody>
        </table>
            
    </div>

<?php include('public_footer.php'); ?>
