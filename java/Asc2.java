// java Asc2
// javac Asc2.java
// java Asc2 > ascoutput.txt
class Asc2 {
	public static void main (String args[]){
		int n;
		char c;
		String hex ;
		String bin;
		n = 0;
		
		while (n < 256){
			c = (char)n;//type cast
			System.out.print("\t");
			System.out.print(n);
			System.out.print("\t");
			System.out.print(c);
			System.out.print("\t");
			hex = Integer.toHexString(c);//int to hex
			bin = Integer.toBinaryString(c);
			System.out.print(hex);
			System.out.print("\t");
			System.out.print(bin);
			System.out.print("\t");
			System.out.println();
			n = n + 1;
		}
	}
}
