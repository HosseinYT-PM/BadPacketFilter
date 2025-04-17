# BadPacketFilter

<p align="center">
  <img src="assets/badpacketfilter-banner.png" alt="BadPacketFilter Banner" width="600">
</p>

**A Security Plugin That Prevents Bad Packets From Entering For PocketMine 5**

## Overview

BadPacketFilter is a lightweight security plugin for PocketMine-MP 5 that filters out malformed or malicious network packets before they can harm your server. The plugin not only cancels invalid packets but also implements rate limiting and dynamic IP blacklisting to help mitigate DDoS attacks and bot flooding.

## Features

- **Packet Filtering:**  
  Automatically cancels any packet that doesn’t meet pre-set validation criteria.
  
- **Rate Limiting:**  
  Monitors incoming packets per IP over a defined time interval. If an IP exceeds the threshold, it gets temporarily blocked.
  
- **Dynamic Blacklisting:**  
  Suspicious IPs are automatically added to a blacklist for a predetermined duration, reducing the risk of bot attacks.
  
- **Easy Configuration:**  
  Customize parameters such as packet threshold, monitoring interval, and block duration directly in the source code.
  
- **Efficiency:**  
  Designed to work seamlessly with PocketMine-MP 5 without causing any significant performance overhead.

## Installation

1. **Download the Latest Release:**  
   Visit the [Releases](https://github.com/HosseinYT-PM/BadPacketFilter/releases) page to download the newest version of the plugin (available in `.phar` format or as source).

2. **Place the Plugin:**  
   Copy the downloaded file or folder into your PocketMine-MP `plugins` directory.

3. **Restart the Server:**  
   Restart your PocketMine-MP server to enable BadPacketFilter.


## Usage

Once activated, BadPacketFilter will automatically monitor and filter incoming network packets. Suspicious packets are canceled, and a log entry is recorded. Check your server logs to see real-time alerts when malformed packets are detected and blocked.

## Contributing

Contributions to BadPacketFilter are welcome! If you have ideas for new features, bug fixes, or improvements, please feel free to open an issue or submit a pull request on [github.com/HosseinYT-PM/BadPacketFilter](https://github.com/HosseinYT-PM/BadPacketFilter).

## License

This project is licensed under the MIT License. For more details, please refer to the [LICENSE](LICENSE) file.

---

