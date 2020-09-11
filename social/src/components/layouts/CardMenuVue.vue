<template>

    <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
        <div class="col s4">
            <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class="col s8">
            <span class="black-text">
            <h5> {{nome || 'Nome'}}</h5>
            <h6>{{desc || 'Descrição'}}</h6>
            </span>
        </div>
        </div>
    </div>



</template>


<script>
export default {
  name: 'CardMenuVue',
  props:['nome', 'desc'],
  data () {
    return {
      
    }
  }
}
</script>

<style scoped>



</style>

