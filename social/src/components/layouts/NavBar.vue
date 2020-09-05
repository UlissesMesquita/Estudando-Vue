<template>

  <nav :class="cor || 'blue' ">
    <div class="nav-wrapper container">
      <a :href="url || '#' " class="brand-logo">{{logo || 'Logo'}}</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a :href="menu1-url || '#' ">{{menu1 || 'Menu 1'}}</a></li>
        <li><a :href="menu2-url || '#' ">{{menu2 || 'Menu 2'}}</a></li>
        <li><a :href="menu3-url || '#' ">{{menu3 || 'Menu 3'}}</a></li>
      </ul>
    </div>
  </nav>

</template>


<script>
export default {
  name: 'NavBar',
  props:['logo', 'url', 'cor', 'menu1-url', 'menu2-url', 'menu3-url', 'menu1', 'menu2', 'menu3'],
  data () {
    return {
      
    }
  }
}
</script>

<style scoped>

</style>

