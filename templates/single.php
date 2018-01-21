<template id="single">
<div>
    <header-component></header-component>
    <div class="container">

        <div class="row single">
            <div class="col-lg-8 content-area">
                <div v-if="post[0]">
                    <h1 class="post-title">{{post[0].title.rendered}}</h1>
                    <div class="content" v-html="post[0].content.rendered"></div>
                    <comments v-bind:comments="comments"></comments>
                    <comment-form></comment-form>
                </div><!--end v-if-->
                <div v-else>
                    <nopost></nopost>           
                </div>
            </div><!--end content-area-->
            <sidebar></sidebar>
        </div><!--end single-->

    </div><!--end container-->
    <footer-component></footer-component>
</div>
</template>