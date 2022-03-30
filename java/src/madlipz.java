import java.util.Scanner;

public class madlipz {
	public static void main(String [] args) {
		
	Scanner keyboardInput = new Scanner (System.in);
	System.out.print("Enter Any Color= ");
	String color=keyboardInput.nextLine();
	
	System.out.print("Enter Any pNoun= ");
	String pNoun=keyboardInput.nextLine();
	
	System.out.print("Enter Any celebrity= ");
	String celebrity=keyboardInput.nextLine();
	
	System.out.println("Roses are "+ color +"\n"
						+ pNoun +" are blue\n"
						+"I Love "+ celebrity);
	
	}

}
