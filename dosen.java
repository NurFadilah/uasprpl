public class dosen {
    public String nip;
    public String nama;
    public String gelarawal;
    public String gelarakhir;
    private boolean status;
    
	public void setStatus(Boolean Stat)
	{
		status=Stat;
	}
	
    public void getDataDosen()
	{
        System.out.println("Nip           : "+nip);
        System.out.println("Nama          : "+gelarawal+" "+nama+" "+gelarakhir);
        String Status;
		if(status==true)
		{
			Status="Aktif Mengajar";
		}
        else if(status==false)
		{
			Status="Tidak Aktif Mengajar";
		}
		else
		{
			Status="Tidak Diketahui";
		}
        System.out.println("Status        : "+Status);        
    }
}
