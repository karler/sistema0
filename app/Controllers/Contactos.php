<?php 
    namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\ContactosModel;

    class Contactos extends BaseController
    {
        protected $dbcontactos;
        
        public function __construct(){
            $this->dbcontactos = new ContactosModel();
        }
        
        public function index()
        {
            $resultado = $this->dbcontactos->findAll();
            $data = [ 
                'titulo' => 'Todos los Contactos',
                'datos' => $resultado
            ];
            echo view('contactosview2',$data);
        }
		
		public function nuevo(){
            $data = [
                'titulo' => 'Contactos - Nuevo'
            ];
            echo view('nuevo',$data);
        }

        public function insertar(){
            $valores = [
                'nombre' => $this->request->getpost('nombre'),
                'apellidos' => $this->request->getpost('apellidos'),
                'dni' => $this->request->getpost('dni'),
                'email' => $this->request->getpost('email'),
                'celular' => $this->request->getpost('celular')
            ];
            echo "Grabando";
            $this->dbcontactos->save($valores);
			//$ruta = base_url()+"/public/contactos";
            return redirect()->to(base_url()."/public/contactos");
        }
		
		public function editar($id){
			$resultado = $this->dbcontactos->where('idcontacto',$id)->first();
			$data = [
				'titulo' => 'Contactos - Editar',
				'datos' => $resultado
			];
			echo view('editar',$data);
		}
		
		public function actualizar(){
			$id = $this->request->getpost('idcontacto');
			$valores = [
				'nombre' => $this->request->getpost('nombre'),
				'apellidos' => $this->request->getpost('apellidos'),
				'dni' => $this->request->getpost('dni'),
				'email' => $this->request->getpost('email'),
				'celular' => $this->request->getpost('celular')
			];
			$this->dbcontactos->update($id, $valores);
			return redirect()->to(base_url()."/public/contactos");
		}
		
		public function eliminar($id){
			$this->dbcontactos->delete($id);
			return redirect()->to(base_url()."/public/contactos");
		}
    }