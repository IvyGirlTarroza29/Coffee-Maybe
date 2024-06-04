<div class="card">
        <span class="category"><?=$item->category?></span>
        <span class="type"><?=$item->type?></span>
            <div class="image">
                <img src="<?=$item->image?>" alt="">
            </div>
        <span class="title"><?=$item->title?></span>
        <span class="price"><?=$item->price?></span>
        <button onclick="addToCart('<?=$item->title?>', '<?=$item->price?>')">Add to Cart</button>
</div>