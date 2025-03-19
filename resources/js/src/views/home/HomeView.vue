<template>
	<div>
	<h4>Pagina Home</h4>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Data de Criação</th>
		  <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <th scope="row">{{ item.id }}</th>
          <td>{{ item.nome }}</td>
          <td>{{ item.dataCriacao }}</td>
		  <td>
				<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" @click.prevent="showExample(item.id)">
					<i class="fas fa-eye"></i>
				</button>
			</td>
        </tr>
      </tbody>
    </table>
	</div>

	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<b>Nome: </b> {{ item.nome }} <br/>
		<b>Data de Criação: </b> {{ item.dataCriacao }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </template>
  
  <script>
  import ExampleService from '../../services/example';
  export default {
	name: 'HomeView',
	data() {
	  return {
		items: [],
		item: {},
	  };
	},
	methods: {
		async listExamples() {
			try {
				const response = await ExampleService.getExamples();
				this.items = response.data;
			} catch (error) {
				console.error(error);
			}
		},

		async showExample(id) {
			try {
				const response = await ExampleService.getExample(id);
				this.item = response.data;
			} catch (error) {
				console.error(error);
			}
		}
	},
	mounted() {
		this.listExamples();
	}
  };
</script>