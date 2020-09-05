<template>
  <span>

<header>
      <nav-bar cor="green darken-1" logo="Social Media" url="#"/>
</header>

<main>
  <div class="container"></div>
    <router-view/>
</main>


     <footer class="page-footer green darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>








  </span>
</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import NavBar from '@/components/layouts/NavBar'
    import Footer from '@/components/layouts/Footer'


//Importação de componentes
export default {
  name: 'App',
  components: {
    NavBar,
    Footer
  }
}
</script>


<style >

</style>
