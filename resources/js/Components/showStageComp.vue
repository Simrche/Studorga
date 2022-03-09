<template>
    <h2 id="firstTitle" @click="session">{{stages.entreprise}} ({{stages.poste}})</h2>
    <div class="container">
        <h3>Ville :</h3>
        <p>{{stages.ville}}</p>
    </div>
    <div class="container">
        <h3>Pays :</h3>
        <p>{{stages.pays}}</p>
    </div>
    <div class="container">
        <h3>Description :</h3>
        <p>{{stages.description}}</p>
    </div>
    <div class="container">
        <h3>Status :</h3>
        <p v-if="stages.status === 'En attente'"><span class="attente">{{stages.status}}</span></p>
        <p v-if="stages.status === 'Entretien'"><span class="entretien">{{stages.status}}</span></p>
        <p v-if="stages.status === 'Accepté'"><span class="accepte">{{stages.status}}</span></p>
        <p v-if="stages.status === 'Refusé'"><span class="refus">{{stages.status}}</span></p>
    </div>
    <div id="showButton">
        <jet-nav-link :href="route('dashboard')" class="edit">Retour</jet-nav-link>
        <jet-nav-link @click="deleted(stages.id)" class="delete">Supprimer</jet-nav-link>
        <jet-nav-link :href="route('editStage', stages.id)" class="edit">Editer</jet-nav-link>
    </div>
</template>

<style scoped>
    #firstTitle {
        font-size: 28px;
        margin: 24px 0 0 24px;
    }

    .container {
        width: 95%;
        margin: 24px auto 0 auto;
    }

    .container h3 {
        font-weight: bold;
    }

    #showButton {
        display: flex;
        justify-content: right;
        width: 95%;
        padding-bottom: 48px;
        margin-top: 24px;
    }

    .delete{
        margin: 0 12px;
        border: solid 1px black;
        padding: 5px 10px;
        background-color: rgb(153, 11, 11);
        color: white;
        cursor: pointer;
    }

    .edit{
        margin: 0 12px;
        border: solid 1px black;
        padding: 5px 10px;
        background-color: #6b22e3;
        color: white;
    }

    .attente {
        background-color: #6b22e3;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }

    .entretien {
        background-color: #f7d308;
        color: black;
        padding: 0 8px;
        border-radius: 10px;
    }

    .accepte {
        background-color: #2a8805;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }

    .refus {
        background-color: #910a00;
        color: white;
        padding: 0 8px;
        border-radius: 10px;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
    JetNavLink
  },
  props: ['stages', 'sessions'],
  data() {
    return {
      form: this.$inertia.form({
        entreprise: null,
        poste: null,
        ville: null,
        pays: null,
        status: null,
        description: null,
      }),
    };
  },
  methods: {
    submit() {
      this.$inertia.post(this.route("createStagePost"), this.form);
    },
    deleted(id) {
        this.$inertia.delete(this.route("deleteStage", id));
    },
  },
});
</script>
