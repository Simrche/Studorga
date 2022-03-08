<template>
    <h2 id="firstTitle">Editer un stage :</h2>
    <form action="#">
        <div class="formInputDiv">
            <label for="entreprise">Entreprise :</label>
            <input type="text" name="entreprise" id="entreprise" v-model="form.entreprise" autocomplete="off">
        </div>
        <div class="formInputDiv">
            <label for="poste">Poste :</label>
            <input type="text" name="poste" id="poste" v-model="form.poste" autocomplete="off">
        </div>
        <div class="formInputDiv">
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" v-model="form.ville" autocomplete="off">
        </div>
        <div class="formInputDiv">
            <label for="pays">Pays :</label>
            <input type="text" name="pays" id="pays" v-model="form.pays" autocomplete="off">
        </div>
        <div id="status">Status :</div>
        <div id="statusInput">
            <input type="radio" id="contactChoice1" name="status" value="Attente" v-model="form.status">
            <label for="contactChoice1">En attente</label>

            <input type="radio" id="contactChoice2" name="status" value="Entretien" v-model="form.status">
            <label for="contactChoice2">Entretien</label>

            <input type="radio" id="contactChoice3" name="status" value="Refusé" v-model="form.status">
            <label for="contactChoice3">Refusé</label>

            <input type="radio" id="contactChoice4" name="status" value="Accepté" v-model="form.status">
            <label for="contactChoice4">Accepté</label>
        </div>
        <div class="formInputDiv">
            <label for="description">Description :</label>
            <textarea name="description" id="description" v-model="form.description" autocomplete="off"></textarea>
        </div>
        <div id="formButton">
            <a :href="route('dashboard')" class="cancel">Annuler</a>
            <input type="button" value="Ajouter" @click="submit" id="submit" autocomplete="off">
        </div>
    </form>
</template>

<style scoped>
    #firstTitle {
        font-size: 28px;
        margin: 24px 0 0 24px;
    }

    form {
        width: 90%;
        margin: 12px auto 0 auto;
        padding-bottom: 48px;
    }

    .formInputDiv {
        display: flex;
        flex-direction: column;
        margin-top: 12px;
    }

    .formInputDiv input {
        margin-top: 8px
    }

    #formButton {
        width: 100%;
        display: flex;
        justify-content: right;
        margin-top: 48px;
    }

    .cancel {
        color: white;
        background-color: rgb(155, 0, 0);
        border: black 1px solid;
        padding: 5px 10px;
        margin-right: 24px;
        width: 80px;
    }

    #submit {
        color: white;
        background-color: #6b22e3;
        border: solid black 1px;
        padding: 5px 10px;
        width: 80px;
        cursor: pointer;
    }

    #status {
        margin-top: 12px;
    }

    #statusInput {
        display: flex;
        align-items: center;
    }

    #statusInput input {
        margin-right: 8px;
    }

    #statusInput label {
        margin-right: 8px;
    }
</style>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";

export default defineComponent({
  components: {
    JetApplicationLogo,
  },
  props: ['stages'],
  data() {
    return {
      form: this.$inertia.form({
        entreprise: this.stages.entreprise,
        poste: this.stages.poste,
        ville: this.stages.ville,
        pays: this.stages.pays,
        status: this.stages.status,
        description: this.stages.description,
        user_id: this.$page.props.auth.user.id
      }),
    };
  },
  methods: {
    submit() {
      this.$inertia.post(
          this.route("editStagePost", this.stages.id), this.form);
    },
  },
});
</script>
