import java.util.Scanner;
public class dec2{
	public static void main(String[] args) {
		String m;
		do{
			Scanner sc=new Scanner(System.in);
			m=sc.nextLine();
			eval(m);
		}while(m!=" ");
	}
	public static String eval(String m){
		int x[]=new int[20];
		for(int i=0;i<20;i++){
			x[i]=m.charAt(i)-'0';
		}
		int count=0;
		int a=0;
		int b=0;
		for(int i=0;i<10;i++){
			if(i%2==0)
				a+=x[i];
			else
				b+=x[i];
		}
		if(a!=b){
			
		}
		else{
			for(int i=10;i<20;i+=2){
				if(x[i]>x[i+1]){
					count=count+i+2;
					System.out.println("Team A " + count);
					break;
				}
				else if(x[i]<x[i+1]){
					count=count+i+2;
					System.out.println("Team B " + count);
					break;
				}
			}
			if(count==0) System.out.println("TIE");
		}
		return null;
	}
}