<template>
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field
              v-model="name"
              :counter="10"
              :rules="nameRules"
              label="Username or email address"
              required
            ></v-text-field>

            <v-text-field
              v-model="email"
              :rules="emailRules"
              label="Password"
              required
            ></v-text-field>

            <v-checkbox
              v-model="checkbox"
              label="Remember me"
              required
            ></v-checkbox>

            <v-btn
              :disabled="!valid"
              color="black"
              class="mr-4 white--text slogan-3"
              @click="validate"
            >
              Login
            </v-btn>

          </v-form>
</template>

<script>
export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
}
</script>

<style>

</style>