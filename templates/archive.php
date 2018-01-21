<template id="archive"> 
<div>
    <header-component></header-component>
    <div class="container">
    
    
    <div class="row">       
        <div class="col-lg-8">
            <h1 class="main-title">{{$route.name}}</h1>
            <the-loop 
                v-bind:posts="posts" 
                v-bind:pagers="pagers">
            </the-loop>  
        </div>
        <sidebar></sidebar>
    </div>

    </div><!--end container-->
    <footer-component></footer-component>
</div>


</template>