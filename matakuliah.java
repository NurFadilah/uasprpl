public class matakuliah {
    public String kode,nama;
    public Byte sks;
    private String sifat;
    
    public void getMataKuliah()
	{
        System.out.println("Kode          : "+kode);
        System.out.println("Nama          : "+nama);
        System.out.println("SKS           : "+sks);
        if(kode.endsWith("P") || kode.endsWith("p"))
		{
			sifat="Pilihan";
		}
        else 
		{
			sifat="Wajib";
		}
        System.out.println("Sifat         : "+sifat);
    }
}