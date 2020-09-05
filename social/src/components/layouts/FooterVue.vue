<template>

     <footer :class="cor || 'blue'">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">{{footerName || 'Footer Name'}}</h5>
                <p class="grey-text text-lighten-4">{{subFooter || 'Descrição Footer'}}</p>
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
            © {{ano}} {{logo}}
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



</template>


<script>
export default {
  name: 'FooterVue',
  props:['cor', 'logo', 'descricao','ano'],
  data () {
    return {
      
    }
  }
}
</script>

<style scoped>



</style>

