class MyThread extends Thread  {
    @Override
	public void run() {
        System.out.println(Thread.currentThread().getName() + ". Thanos: " + Thanos.getInstance());
	}

    // Function for testing
    public static void main(String[] args) {
        // System.out.println(Thanos.getInstance());
        Thread t1 = new MyThread();
		Thread t2 = new MyThread();
		Thread t3 = new MyThread();
		t1.start();
		t2.start();
		t3.start();
    }
}

public class Thanos {
    private static volatile Thanos instance;

    private Thanos() {}

    public static Thanos getInstance() {
        if (instance == null) {
            synchronized (Thanos.class) {
                if (instance == null) {
                    instance = new Thanos();
                }
            }
        }
        return instance;
    }
}
