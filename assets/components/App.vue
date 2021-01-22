<template>
    <div class="slider">
        <figure>
            <div :key="images.index" class="slide" v-for="images in porfolio" >
                <p class="caption">
                    {{images.caption}}
                </p>
                <img :src='images.url' alt="image">
            </div>
        </figure>
    </div>
</template>

<script>
export default {
    data () {
        return {
            porfolio: [
                {url: '../build/images/image-big.png', type: 'slider', caption: 'Lorem ipsum dolor sit amet consectetur adipiscing elit iaculis, quisque.'},
                {url: '../build/images/image-big2.png', type: 'slider', caption: 'Aliquam eleifend habitant, ac lectus porta est semper suscipit proin.'},
                {url: '../build/images/image-big3.jpg', type: 'slider', caption: 'Feugiat tortor vel dignissim phasellus ultrices, iaculis quam consequat.'},
                {url: '../build/images/image-big.png', type: 'slider', caption: 'Elementum et vitae diam senectus curae aptent nunc velit semper.'},
                {url: '../build/images/image-big2.png', type: 'slider', caption: 'Metus posuere congue inceptos est, integer leo nec a tincidunt.'}
            ]
        }
    }
}
</script>