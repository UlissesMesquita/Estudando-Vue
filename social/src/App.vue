<template>
  <div>

      <nav-bar cor="green darken-1" logo="Social Media" url="Hastag" menu1="Arquivos" menu2="Pastas" menu3="Feed"/>

    <router-view/>
  </div>
</template>

<script>
//Importação de NavBars
  import NavBar from '@/components/layouts/NavBar'


//Importação de componentes
export default {
  name: 'App',
  components: {
    NavBar
  }
}
</script>


<style>

</style>
