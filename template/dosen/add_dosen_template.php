<form method="post" action="<?php $this->homeAddress('/add-new-dosen'); ?>">
    <label for="txt_nip">Nip:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_nip" type="text" placeholder="Nip" name="nip"/>
    <br />
    <label for="txt_nama">Nama:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_nama" type="text" placeholder="Nama" name="nama"/>
    <br />
    <label for="txt_alamat">Alamat:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_alamat" type="text" placeholder="Alamat" name="alamat"/>
    <br />
    <label for="txt_prodi">Prodi:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_prodi" type="text" placeholder="Prodi" name="prodi"/>
    <br />
    <label for="txt_jurusan">Jurusan:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" id="txt_jurusan" type="text" placeholder="Jurusan" name="jurusan"/>
    <br />
    <label for="txt_no_telepon">No. Telepon:</label>
    <br/>
    <input style="margin-bottom: 16px; width: 20%" type="txt_no_telepon" placeholder="No. Telepon" name="no_telepon"/>
    <br/>
    
    <input type="submit" name="submit" value="Simpan" />
</form>