<template>
<span>

  <header>
      <nav-bar cor="green darken-1" logo="Social Media" url="#"/>
  </header>

  <main>
    <div class="container">

      <div class="row">
        <grid-vue tamanho="4">
          
          <card-menu-vue>
            <div class="row valign-wrapper">
              <grid-vue tamanho="4">
                  <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
              </grid-vue>
              <grid-vue tamanho="8">
                  <span class="black-text">
                  <h5>Ulisses</h5>
                  <h6>Dev. Web</h6>
                  </span>
              </grid-vue>
            </div>
          </card-menu-vue>

          <card-menu-vue>
              <div class="row valign-wrapper">
                <h1>Teste</h1>
              </div>
          </card-menu-vue>

        </grid-vue>

        <grid-vue tamanho="8">
          <router-view></router-view>
          <card-conteudo-vue></card-conteudo-vue>
        </grid-vue>
      </div>




      
    </div>  
  </main>

    <footer-vue cor="green darken-1" logo="Social" descricao="Informações Sobre o Social" ano="2020"></footer-vue>

</span>
</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import NavBar from '@/components/layouts/NavBar'
    import FooterVue from '@/components/layouts/FooterVue'
    import GridVue from '@/components/layouts/GridVue'
    import CardMenuVue from '@/components/layouts/CardMenuVue'




//Importação de componentes
export default {
  name: 'App',
  components: {
    NavBar,
    FooterVue,
    GridVue,
    CardMenuVue,

  }
}
</script>



<style scoped>
/* Rodapé Fixado */
  main {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }  
</style>
