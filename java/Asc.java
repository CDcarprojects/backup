// this is wednesday	
// save as Asc.java
class Asc {
	public static void main (String args[]){
			int n;//variable n is an integer
			int c;//variable c is an integer
			char a; // variable a in a character
			String s; // variable s in a String
			n = 0;
			while (n < 27){	
					c= n + 65;
					a = (char)c;// type cast
					System.out.print(n);
					System.out.print("\t");
					System.out.print(c);
					System.out.print("\t");
					System.out.print(a);
					System.out.print("\t");
					s = Integer.toHexString(c);// int to hex
					System.out.println(s);
				n = n + 1;
		}
	}
}
