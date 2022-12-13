<template>
<div>
  <h1>{{ title}}</h1>
  <a href="/login"> Login</a>
  <a href="/dash"> Dash</a>
</div>
</template>
<script>
export default {
  props: ['title'],
    data() {
    return {
      count: 0
    }
  }
}
</script>