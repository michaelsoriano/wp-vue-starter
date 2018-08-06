<template id="home">

<div class="home">
    <header-component></header-component>
    
    <div class="jumbotron">
      <div class="container">
        <h1>Home Page</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div>     
    
    <div class="container">

    <div class="row">
        <div class="col-lg-8">
            <h5 class="latest-title">Latest from the <router-link v-bind:to="{path:'/blog/',name:'blog'}" >Blog</router-link></h5> 
            <the-loop v-bind:posts="posts" v-bind:pagers="pagers"></the-loop>      
        </div>
        <sidebar></sidebar>
    </div>


</div>
<footer-component></footer-component>
</div>


</template>   
