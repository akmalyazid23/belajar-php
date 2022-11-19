CREATE DATABASE fakultas;

CREATE TABLE jurusan (
   id INTEGER PRIMARY KEY AUTO_INCREMENT,
   kode CHAR (4) NOT NULL,
   nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa(
id  INTEGER PRIMARY KEY AUTO_INCREMENT,
id_jurusan INTEGER NOT NULL,
nim CHAR(8) NOT NULL,
nama VARCHAR(50) NOT NULL,
jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
tempat_lahir VARCHAR (50) NOT NULL,
tanggal_lahir DATE NOT NULL,
alamat VARCHAR(225) NOT NULL,
FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- insert jurusan
 insert into jurusan (kode, nama) values ("1234","DesKomVis");

-- insert mahasiswa
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20221904", "Yazid", "Laki-laki", "Lamongan", "2001-10,23", "jl. merdeka Sugihan");
 insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "20221902", "Truno", "Laki-laki", "Bekasi", "2001-11-3", "jl. Soekarno Hatta 9");

 -- update mahasiswa
 update mahasiswa set alamat = "jl. kartini sugihan" where id = 1;

 -- delete mahasiswa
delete from mahasiswa where id = 2;
