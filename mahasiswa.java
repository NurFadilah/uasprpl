public class mahasiswa {
    public String nim;
    private Short angkatan;
    public String nama;
    public String jurusan;
    private Character jk;
    
    public void setJk(String Jk)
	{
        jk = Jk.charAt(0);
    }
    
    public void getDataMahasiswa()
	{
        System.out.println("Nim           : "+nim);
		System.out.println("Nama          : "+nama);
		System.out.println("Jurusan       : "+jurusan);
        angkatan = Short.parseShort(nim.substring(1,3));
        System.out.println("Angkatan      : 20"+angkatan);
        String jekel;
        if(jk=='L' || jk=='l') 
		{
			jekel="Laki - Laki";
		}
        else if(jk=='P' || jk=='p')
		{
			jekel="Perempuan";
		}
        else 
		{
			jekel="Tidak Diketahui";
		}
        System.out.println("Jenis Kelamin : "+jekel);
    }
}