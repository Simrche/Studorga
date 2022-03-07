<template>
  <app-layout title="Dashboard">
    <template #header></template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <create-stage-comp />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<style scoped>
.onPurple {
  color: whitesmoke;
}
</style>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import MesStages from "@/Components/MesStages.vue";
import createStageComp from "../Components/createStageComp.vue";

export default defineComponent({
  components: {
    AppLayout,
    MesStages,
    createStageComp
  },
  props: ['stages'],
  methods: {
      go() {
          console.log(this.stages)
      }
  }
});
</script>
