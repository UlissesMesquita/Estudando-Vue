<template>

    <span>
      <div v-if="img" class="card-image">
        <img :src="img">
      </div>

      <div v-if="txt" class="card-content">
        <p>{{txt}}</p>
      </div>
    </span>

</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import CardDetalheVue from '@/components/social/CardDetalheVue'

//Importação de componentes
export default {
  name: 'CardDetalheVue',
  props:['img', 'txt'],
  data() {
    return { 

    }
  },


}
</script>

<style scoped>



</style>

