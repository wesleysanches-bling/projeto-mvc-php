import { HttpApiMVC } from "../../configs"

const ExampleService = {
	getExamples: async () => {
		return HttpApiMVC.get('/exemplo')
		.then((response) => {
			return response.data;
		});
	},

	getExample: async (id) => {
		return HttpApiMVC.get(`/exemplo/show/${id}`)
		.then((response) => {
			return response.data;
		})
	}
}

export default ExampleService;