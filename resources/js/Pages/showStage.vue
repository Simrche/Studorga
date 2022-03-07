<template>
  <app-layout title="Dashboard">
    <template #header></template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <show-stage-comp v-bind:stages="stages" />
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
import showStageComp from "../Components/showStageComp.vue";

export default defineComponent({
  components: {
    AppLayout,
    MesStages,
    showStageComp
  },
  props: ['stages'],
});
</script>
