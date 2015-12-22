public class fasilitas {
    public String kode,jenis,nama;
    private Short jumlah;
    public boolean status;
    
    public void setJumlah(Short Jumlah)
	{
		jumlah=Jumlah;
	}
	
	public void getFasilitas()
	{
		System.out.println("Kode          : "+kode);
		System.out.println("Jenis         : "+jenis);
		System.out.println("Nama          : "+nama);
		System.out.println("Jumlah        : "+jumlah);
		String Status;
		if(status==true)
		{
			Status="Berfungsi";
		}
		else if(status==false)
		{
			Status="Rusak";
		}
		else
		{
			Status="Tidak Diketahui";
		}
		System.out.println("Status        : "+Status);
	}
}
