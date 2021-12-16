<?php

class Mahasiswa_model {
	private $mhs = [
		[
			"nama" => "Gregorius Ferdy",
			"nim" => "18051204051",
			"email" => "ferdypp@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Erita Putri",
			"nim" => "18051204051",
			"email" => "eritaputefe234@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Fadli Rafi",
			"nim" => "18051204051",
			"email" => "sdfesf235@gmail.com",
			"jurusan" => "Teknik Informatika"
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}