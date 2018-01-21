<template id="search">
<div>
    <header-component></header-component>
    <div class="container">
    
        <div class="row">        
            <div class="col-lg-12">
                <h1 class="main-title">Search Results</h1>
                <the-loop 
                    v-bind:posts="posts" 
                    v-bind:pagers="pagers">
                </the-loop>  
            </div><!--end col-lg-12-->
        </div><!--end row-->

    </div><!--end container-->
    <footer-component></footer-component>
<div>

</template>