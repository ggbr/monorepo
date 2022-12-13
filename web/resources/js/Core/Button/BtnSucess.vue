<template>
    <button>
      <slot></slot>
    </button>
</template>
<script>
export default {
  props: [''],
    data() {
    return {
      count: 0
    }
  }
}
</script>