import java.util.Scanner;
public class ganjil_genap{
	public static void main (String[] argss){
		Scanner s=new Scanner(System.in);
		System.out.printf("Input sebuah bilangan :");
		int bilangan=s.nextInt();
		if (bilangan % 2==1){
				System.out.printf(bilangan+ "Adalah bilangan ganjil dan bilangan prima ");
				}
		else
				System.out.printf(bilangan+"adalah bilangan genapdan bukan bilangan prima");
				}
				}