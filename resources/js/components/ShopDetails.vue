<template>
    <div class="cd-quick-view">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="selected"><img src="img/item-1.jpg" alt="Product 1"></li>
            </ul> <!-- cd-slider -->
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info">
            <h2>Shop </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium repellendus.</p>

            <ul class="cd-item-action">
                <li><button class="add-to-cart">Like</button></li>					
                <li><a href="#0">Dislike</a></li>	
            </ul> <!-- cd-item-action -->
        </div> <!-- cd-item-info -->
        <a href="#" class="cd-close">Close</a>
    </div> <!-- cd-quick-view -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
