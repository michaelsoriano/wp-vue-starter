<template id="page">
<div>
    <header-component></header-component>
    <div class="container">

        <div class="row"> 
            <div class="col-lg-12">
                <div v-if="post[0]">
                    <h1>{{post[0].title.rendered}}</h1>
                    <div class="content" v-html="post[0].content.rendered"></div>
                </div>  
                <div v-else>
                    <nopost></nopost>
                </div>
            </div><!--end col-lg-12-->
        </div><!--end row-->

    </div><!--end container-->
    <footer-component></footer-component>
</div>

</template> 