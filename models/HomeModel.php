<?php

	class HomeModel extends Model{

		public function Index(){

			$this->query('SELECT * FROM options ORDER BY `id` ASC');
			$res = $this->resultSet();


			if(isset($_POST['submit'])){

						$po = $_POST['text'];
						if (empty(trim($po))==true || $po==null) {
							Messages::setMsg('Sva polja moraju biti popunjena ' , 'error');
						} else {


						$this->query('INSERT INTO options (value) VALUES (:value)');
						$this->bind(':value', $po);
						$this->execute();
						header('Location: '.ROOT_URL);

					}
			}

			if(isset($_POST['delete'])){

						$id = $_POST['delete'];
						$this->query('DELETE FROM options WHERE id = (:id)');
						$this->bind(':id', $id);
						$this->execute();
						header('Location: '.ROOT_URL);
			}

			if(isset($_POST['csv'])){

						$f = fopen("data.csv", "w");
						foreach ($res as $line) {
						    fputcsv($f, $line);
						}
						fclose($f);
						header('Location: '.ROOT_URL.'data.csv');

			}

			return $res;

		}

	}
