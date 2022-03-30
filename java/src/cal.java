import java.util.Scanner;

public class cal {
	public static void main(String [] args) {
		
		Scanner keyboardInput = new Scanner (System.in);
		System.out.print("Enter First number= ");
		double num1=keyboardInput.nextDouble();
		System.out.print("Enter Second number= ");
		double num2=keyboardInput.nextDouble();
		System.out.println(num1+num2);
	}
	
}